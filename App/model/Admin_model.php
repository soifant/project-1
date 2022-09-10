<?php

class Admin_model{
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	
	}
	
	public function getTambah($data){
	
		$query = "INSERT INTO data_tutorial SET 

				judul=:judul,
				kategori=:kategori,
				tutorial=:tutorial,
				sub_judul=:sub,
				link=:link,
				status=:status,
				dari=:dari
				";
		
		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('sub', $data['sub_judul']);
		$this->db->bind('link', $data['link']);
		$this->db->bind('status', 'publik');
		$this->db->bind('dari', $data['dari']);
		$this->db->bind('kategori', $data['kategori']);
		$this->db->bind('tutorial', $data['tutorial']);
		$this->db->eksekusi();
		return $this->db->rowCount();
	}
	
	public function getTutorial(){
	
		$query = "SELECT DISTINCT kategori FROM data_tutorial";
		$this->db->query($query);
		return $this->db->ambilData();
	}
	
	public function getPage($nama){
	
		$query = "SELECT DISTINCT judul FROM data_tutorial WHERE kategori=:kategori and status=:status";
		$this->db->query($query);
		$this->db->bind('kategori', $nama);
		$this->db->bind('status', 'publik');
		return $this->db->ambilData();
	}
	
	public function getContoh($nama){
	
		$query = "SELECT * FROM data_tutorial WHERE judul=:j and tutorial=:t";
		$this->db->query($query);
		$this->db->bind('j', str_replace('-', ' ', $nama));
		$this->db->bind('t', 'contoh');
		return $this->db->ambilData();
	}
	
	
	public function getVideo($nama){
	
		$query = "SELECT * FROM data_tutorial WHERE judul=:j and tutorial=:t";
		$this->db->query($query);
		$this->db->bind('j', str_replace('-', ' ', $nama));
		$this->db->bind('t', 'video');
		return $this->db->ambilData();
	}
	
	public function getArtikel($nama){
	
		$query = "SELECT * FROM data_tutorial WHERE judul=:j and tutorial=:t";
		$this->db->query($query);
		$this->db->bind('j', str_replace('-', ' ', $nama));
		$this->db->bind('t', 'artikel');
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
