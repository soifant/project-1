<?php

class Home_model{
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	}
	
	
	public function getArtikel($nama){
		$query = "SELECT * FROM data_tutorial where judul=:judul and tutorial=:tutorial and status=:status";
		$this->db->query($query);
		$this->db->bind("judul", str_replace('-', ' ', $nama));
		$this->db->bind("tutorial", "artikel");
		$this->db->bind('status', 'publik');
		return $this->db->ambilData();
	
	}
	
	public function getVideo($nama){
		$query = "SELECT * FROM data_tutorial where judul=:judul and tutorial=:tutorial and status=:status";
		$this->db->query($query);
		$this->db->bind("judul", str_replace('-', ' ', $nama));
		$this->db->bind("tutorial", "video");
		$this->db->bind('status', 'publik');
		return $this->db->ambilData();
		
	}
	
	public function getContoh($nama){
		
		$query = "SELECT * FROM data_tutorial WHERE judul=:judul and tutorial=:tutorial and status=:status";
		$this->db->query($query);
		$this->db->bind("judul", str_replace('-', ' ', $nama));
		$this->db->bind("tutorial", "contoh");
		$this->db->bind('status', 'publik');
		return $this->db->ambilData();
	}
	
	public function getTutorial($nama){
	
		$query = "SELECT DISTINCT judul FROM data_tutorial WHERE kategori=:kategori and status=:status";
		$this->db->query($query);
		$this->db->bind('kategori', $nama);
		$this->db->bind('status', 'publik');
		return $this->db->ambilData();
	}
	
	public function getAll(){
	
	$query = "SELECT DISTINCT kategori FROM data_tutorial";
	$this->db->query($query);
	return $this->db->ambilData();
	}
	
	
	

}






?>
