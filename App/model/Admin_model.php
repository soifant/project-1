<?php

class Admin_model{
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	
	}
	
	public function tambahKategori($data){
	
		
			$query = "INSERT INTO data_kategori SET nama=:nama";
			$this->db->query($query);
			$this->db->bind('nama', $data['nama']);
			$this->db->eksekusi();
			return $this->db->rowCount();
	}
		
	public function tambahTutorial($data){
			$query = "INSERT INTO data_tutorial SET judul=:judul, kategori=:kategori";
			$this->db->query($query);
			$this->db->bind('judul', $data['judul']);
			$this->db->bind('kategori', $data['kategori']);
			$this->db->eksekusi();
			return $this->db->rowCount();
	}
		
	public function tambahPost($data){
			$query = "INSERT INTO data_post SET judul=:judul, link=:link, dari=:dari, type=:type, tutorial=:tutorial, kategori=:kategori";
			$this->db->query($query);
			$this->db->bind('judul', $data['judul']);
			$this->db->bind('link', $data['link']);
			$this->db->bind('dari', $data['dari']);
			$this->db->bind('type', $data['type']);
			$this->db->bind('tutorial', $data['tutorial']);
			$this->db->bind('kategori', $data['kategori']);
			$this->db->eksekusi();
			return $this->db->rowCount();
		
		
	}
		
		
	
	public function totalArtikel($nama){
		$query = "SELECT COUNT(*) FROM data_post WHERE kategori=:kategori and type=:type";
		$this->db->query($query);
		$this->db->bind('kategori', $nama);
		$this->db->bind('type', 'artikel');
		return $this->db->ambilData();
	
	}
	
	
	public function totalVideo($nama){
	$query = "SELECT COUNT(*) FROM data_post WHERE kategori=:kategori and type=:type";
	$this->db->query($query);
	$this->db->bind('kategori', $nama);
	$this->db->bind('type', 'video');
	return $this->db->ambilData();
	
	
	}
	
	public function totalContoh($nama){
	$query = "SELECT COUNT(*) FROM data_post WHERE kategori=:kategori and type=:type";
	$this->db->query($query);
	$this->db->bind('kategori', $nama);
	$this->db->bind('type', 'contoh');
	return $this->db->ambilData();
	
	
	
	}
	
	public function getPost($nama){
	
		$query = "SELECT * FROM data_post WHERE tutorial=:tutorial";
		$this->db->query($query);
		$this->db->bind('tutorial', str_replace('-', ' ', $nama));
		return $this->db->ambilData();
	}
	
	public function getTutorial($nama){
		$query = "SELECT judul FROM data_tutorial WHERE kategori=:kategori";
		$this->db->query($query);
		$this->db->bind('kategori', $nama);
		return $this->db->ambilData();
	}
	
	public function getAllTutorial(){
	
	$query = "SELECT * FROM data_tutorial";
	$this->db->query($query);
	return $this->db->ambilData();
	}
	
	public function getKategori(){
	
		$query = "SELECT * FROM data_kategori";
		$this->db->query($query);
		return $this->db->ambilData();
	}
	
	
	
	
	public function getHapus($id){
		$query = "DELETE FROM data_tutorial WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->eksekusi();
		return $this->db->rowCount();
	
	}
	
	public function getEdit($data){
	
		$query = "UPDATE data_tutorial SET sub_judul=:subj, link=:link, dari=:dari WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('id', $data['id']);
		$this->db->bind('subj', $data['sub_judul']);
		$this->db->bind('link', $data['link']);
		$this->db->bind('dari', $data['dari']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function getPrivate($id){
	
		$query = "UPDATE data_tutorial SET status=:status WHERE id=:id";
		$this->db->query($query);
		$this->db->bind('status', 'private');
		$this->db->bind('id', $id);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}


}
