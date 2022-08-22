<?php

class Home_model{
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	}
	
	
	public function getArtikel(){
		$query = "SELECT * FROM data_artikel";
		$this->db->query($query);
		return $this->db->ambilData();
	
	}
	
	public function getPost($link){
		$query = "SELECT * FROM data_artikel WHERE title=:title";
		$this->db->query($query);
		$this->db->bind("title", $link);
		return $this->db->ambilData();
	}
	


}






?>
