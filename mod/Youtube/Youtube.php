<?php
class Youtube extends Core
{
    private $key = 'AIzaSyCsoRyj9Io9AGz4rlzGZ_PStDV7i4sNo8I';
    private $maxResults = 5;
    public $str = 'adriano celentano, sting, pavarotti caruso, celine dion, michael jackson';
    
    public function strToArr($str)
    {
        $arr = explode(',', $str);
        return $arr;
    }
    
    public function addRequests($str)
    {
        $data = $this->strToArr($str);
        $c = count($data);
        
        for ($i = 0; $i < $c; $i++) {
            if ($this->checkDubbing($data[$i]) === false) {
                $query = "INSERT INTO `requests` (`id`, `name`, `results`) 
                    VALUES (NULL, '{$data[$i]}', '0')";
                $this->execute($query);
            }
        }
    }
    
    public function checkDubbing($str)
    {
        $query = "SELECT COUNT(*) AS `cnt` FROM `requests`
        WHERE `name` LIKE '{$str}'";
        $results = $this->execute($query);
        $row = $results->fetch_assoc();
        if ($row['cnt'] > 0) return true;
        return false;
    }
    
    public function inResults($id)
    {
        $query = "UPDATE `requests` SET  `results` =  '1' 
            WHERE  `id` = {$id}";
        $this->execute($query);
    }
    
    public function getRequest($id)
    {
        $query = "SELECT * FROM `requests`
        WHERE `id` = '{$id}'";
        $results = $this->execute($query);
        $row = $results->fetch_assoc();
        $data = array(
            'id' => $row['id'],
            'name' => $row['name'],
            'results' => $row['results'],
        );
        return $data;
    }
    
    public function getRequests()
    {
        $data = array();
        
        $query = "SELECT * FROM `requests`";
        $results = $this->execute($query);
        
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $data[] = array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'inDb' => $row['results'],
                );
            }
            return $data;
        } else return false;
    }
    
    public function addResults($data)
    {
        $c = count($data);
        
        for ($i = 0; $i < $c; $i++) {
            
            $title = addslashes($data[$i]['title']);
            $description = addslashes($data[$i]['description']);
            
            $query = "INSERT INTO `results` (`id`, `requestId`, `videoId`, `videoTitle`, 
            `videoDescription`, `videoRating`) 
            VALUES (NULL, '{$data[$i]['rId']}', '{$data[$i]['videoId']}', '{$title}', 
            '{$description}', '{$data[$i]['rating']}')";

            $this->execute($query);
        }
        
    }
    
    public function getResults($reqId)
    {
        $data = array();
    
        $query = "SELECT * FROM `results` 
            WHERE `requestId` = {$reqId}";
        $results = $this->execute($query);
    
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) {
                $data[] = array(
                    'rId' => $row['requestId'],
                    'title' => $row['videoTitle'],
                    'description' => $row['videoDescription'],
                    'videoId' => $row['videoId'],
                    'rating' => $row['videoRating'],
                );
            }
            return $data;
        } else return false;
    }
    
    public function countResults($reqId)
    {
        $query = "SELECT COUNT(*) AS `cnt` FROM `results` WHERE `requestId` = {$reqId}";
        $results = $this->execute($query);
        $row = $results->fetch_assoc();
        return $row['cnt'];
    }
    
    public function countAverage($reqId)
    {
        $query = "SELECT SUM(`videoRating`) AS `cnt` FROM `results` WHERE `requestId` = {$reqId}";
        $results = $this->execute($query);
        $row = $results->fetch_assoc();
        return $row['cnt'];
    }
    
    
    public function getYoutubeData($q, $rId)
    {
        $client = new Google_Client();
        $client->setDeveloperKey($this->key);
        
        $youtube = new Google_Service_YouTube($client);
     
        try {
            $content = array();
            
            $search = $youtube->search->listSearch('id,snippet', 
                array(
                    'type' => 'video',
                    'q' => $q,
                    'maxResults' => $this->maxResults,                    
                )
            );
            
            foreach ($search['items'] as $result) {
                $content[] = array(
                    'rId' => $rId,
                    'title' => $result['snippet']['title'],
                    'description' => $result['snippet']['description'],
                    'videoId' => $result['id']['videoId'],
                    'rating' => $this->getYoutubeViews($result['id']['videoId']),
                );
            }

        } catch (Google_Service_Exception $e) {
            $content = sprintf('<p>A service error occurred: <code>%s</code></p>',
                htmlspecialchars($e->getMessage()));
        } catch (Google_Exception $e) {
            $content = sprintf('<p>An client error occurred: <code>%s</code></p>',
                htmlspecialchars($e->getMessage()));
        }
        
        return $content;
    }
    
    public function getYoutubeViews($id)
    {    
        $url = "https://www.googleapis.com/youtube/v3/videos?id={$id}&key={$this->key}&part=statistics";
        $ch = curl_init();
        curl_setopt ($ch, CURLOPT_URL, $url);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
        $contents = curl_exec($ch);
        if (curl_errno($ch)) {
            $contents = '';
        } else {
            curl_close($ch);
        }
    
        if (!is_string($contents) || !strlen($contents)) return 0;
    
        $data = json_decode($contents);
        return $data->{'items'}[0]->{'statistics'}->{'viewCount'};
    }
    
    
}