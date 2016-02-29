<?php

class Database {
	
	public $connection ;
	
	public function __construct(){
		// Create connection
		include('config/config.inc');
		$conn = mysql_connect($servername, $username, $password);
		
		// Check connection
		 if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		$this->connection = $conn; 
	}
	
	
	public function execute($query) {
		
		//WILL DO EXECUTION HERE
		
		$retval = mysql_query($query, $this->connection);
		$result = mysql_fetch_array($retval, MYSQL_ASSOC);
		
		return $result;
	}
	
	public function __destruct(){
		mysql_close($this->connection);
	}
}
?>