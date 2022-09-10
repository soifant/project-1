<?php


class Admin extends Controller{
	public function index(){
		$data['tutorial'] = $this->model('Admin_model')->getTutorial();
		$this->view('template/header');
		$this->view('admin/index', $data);
		$this->view('template/footer');
	}
	
	public function page($nama){
		$data['tutorial'] = $this->model('Admin_model')->getPage($nama);
		$this->view('template/header');
		$this->view('admin/page', $data);
		$this->view('template/footer');
	}
	
	public function tambahPost(){
		$this->view('template/header');
		$this->view('admin/tambah-post', $data);
		$this->view('template/footer');
	}
	
	public function tambah(){
		if($this->model('Admin_model')->getTambah($_POST) > 0){
			header('location:/?url=home/post/'.str_replace(' ', '-', trim($_POST['judul'].'')));
		}else{
			echo 'Kesalahan '.var_dump($_POST);
		}
	}
	
	public function post($link){
		$data['artikel'] = $this->model('Admin_model')->getArtikel($link);
		$data['video'] = $this->model('Admin_model')->getVideo($link);
		$data['contoh'] = $this->model('Admin_model')->getContoh($link);
		$data['title'] = $link;
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
