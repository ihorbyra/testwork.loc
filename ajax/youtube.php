<?php
require_once dirname(__FILE__).'/../conf/conf.php';
require_once dirname(__FILE__).'/../vendor/autoload.php';
require_once dirname(__FILE__).'/../mod/Core/Core.php';
require_once dirname(__FILE__).'/../mod/Youtube/Youtube.php';

switch ($_POST['do']) {
    case 'getYoutubeData':
        $youtube = new Youtube();
        $req = $youtube->getRequest($_POST['id']);
        
        if($req['results'] == 0) {
            $result = $youtube->getYoutubeData($req['name'], $req['id']);
            $youtube->inResults($req['id']);
            $youtube->addResults($result);
        } else {
            $result = $youtube->getResults($req['id']);            
        }
        
        $c = $youtube->countResults($req['id']);
        $sumRating = $youtube->countAverage($req['id']);
        $avarage = ($sumRating / $c);
        $data = array(
            'result' => $result,
            'count' => $c,
            'avarage' => $avarage,
        );
        echo json_encode($data); 
        break;

}
