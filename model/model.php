<?php 

class Model{
	
	public $db;
	
	public function __construct(){
		include('database_engine/database.php');
		$this->db = new Database();
	}
	
	public function getData(){
		$data = array();
		$query = "select * from basic.`user`";
		$sql = $this->db->execute($query);
		//echo "<pre>";print_r($sql);die;
			
		$data['content'] = 'This is Home Page';
		$data['title'] = 'Basic';
		
		return $data;
	}
}
?>