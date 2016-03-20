<?php
class Core extends mysqli
{
	private $hostname = HOSTNAME; 
	private $username = USERNAME;
	private $password = PASSWORD; 
	private $db = DATABASE;

	public function __construct() 
	{
        parent::__construct($this->hostname, $this->username, $this->password, $this->db);

        if (mysqli_connect_error()) {
            die('Ошибка подключения (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }
        parent::set_charset("utf8");
        parent::query("SET NAMES utf8");
    }
    
	public function execute($query, $resultmode = MYSQLI_STORE_RESULT) 
	{
		$query = parent::query($query, $resultmode);
		if(!$query){
			throw new Exception("Database Error [errno: {$this->errno}, connect_errno {$this->connect_errno}]");
		}
		return $query;
	}
	
	/**
	 * Форматированый дамп
	 * @param 		array $data
	 * @param 		bool $pre
	 * @return 		string
	 * @author 		Игорь Быра <ihorbyra@gmail.com>
	 * @version 	1.0
	 */
	public function dump($data, $count = false, $pre = false) 
	{
		$preStart = (($pre == true) ? '<pre>' : '<br />');
		$preEnd = (($pre == true) ? '</pre>' : '<br />');
		
		$cData = count($data);
		$dump = (($count == true) ? 'Count: '.$cData : '');
		
		$dump .= $preStart;
		$dump .= var_export($data, true);
		$dump .= $preEnd;
		
		return $dump;
	}
}
	