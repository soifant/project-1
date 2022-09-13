<?php


class Admin extends Controller{
	public function index(){
		$data['kategori'] = $this->model('Admin_model')->getKategori();
	
		foreach($data['kategori'] as $d){
			$data['artikel'.$d['nama'].''] = $this->model('Admin_model')->totalArtikel($d['nama']);
			$data['video'.$d['nama'].''] = $this->model('Admin_model')->totalVideo($d['nama']);
			$data['contoh'.$d['nama'].''] = $this->model('Admin_model')->totalContoh($d['nama']);
		
		}
		
		$this->view('template/header');
		$this->view('admin/index', $data);
		$this->view('template/footer');
	}
	
	public function page($nama){
		$data['tutorial'] = $this->model('Admin_model')->getTutorial($nama);
		$data['title'] = $nama;
		$this->view('template/header');
		$this->view('admin/page', $data);
		$this->view('template/footer');
	}
	
	public function tambahData($nama, $id_kategori = 'kategori', $id_tutorial = 'tutorial'){
		$data['kategori'] = $this->model('Admin_model')->getKategori();
		$data['tutorial'] = $this->model('Admin_model')->getAllTutorial();
		$data['page'] = $nama;
		$data['id_kategori'] = $id_kategori;
		$data['id_tutorial'] = str_replace('-', ' ', $id_tutorial);
		$this->view('template/header');
		$this->view('admin/tambah-post', $data);
		$this->view('template/footer');
	}
	
	public function tambah($nama){
		
		switch($nama){
	
		case 'kategori':
		$tambah = $this->model('Admin_model')->tambahKategori($_POST);
		break;
		
		case 'tutorial':
		$tambah = $this->model('Admin_model')->tambahTutorial($_POST);
		break;
		
		case 'post':
		$tambah = $this->model('Admin_model')->tambahPost($_POST);
		break;
		
		deafult:
		$tambah = 0;
		break;
		};
		
		if($tambah > 0){
		header('location:/?url=admin');
	    }else{
			echo 'Kesalahan '.var_dump($_POST);
		}
	}
	
	public function post($kategori, $link){
		$data['post'] = $this->model('Admin_model')->getPost($kategori, $link);
		$data['title'] = $link;
		$data['kategori'] = $kategori;
		$this->view('template/header');
		$this->view('admin/post', $data);
		$this->view('template/footer');
	}
	
	public function hapus($id, $nama){
		
		if($this->model('Admin_model')->getHapus($id) > 0){
			header('location:/?url=admin/post/'.$nama.'');
		}else{
			echo 'salah';
		}
	}
	
	public function edit($nama){
	
		if($this->model('Admin_model')->getEdit($_POST) > 0){
			header('location:/?url=admin/post/'.$nama);
		}else{
			echo 'salah'.var_dump($_POST);
		}
	}
	
	public function privat($id, $nama){
	
		if($this->model('Admin_model')->getPrivate($id) > 0){
			header('location:/?url=admin/post/'.$nama);
		}else{
			echo 'salah'.var_dump($_POST);
		}
	}
	

}

?>
