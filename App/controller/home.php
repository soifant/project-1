<?php

class home extends Controller{
	public function index(){
		$data['all'] = $this->model('Home_model')->getAll();
		$this->view('template/header');
		$this->view('home/index', $data);
		$this->view('template/footer');
	}
	
	public function page($nama){
		$data['tutorial'] = $this->model('Home_model')->getTutorial($nama);
		$data['all'] = $this->model('Home_model')->getAll();
		$data['title'] = $nama;
		$this->view('template/header');
		$this->view('home/page', $data);
		$this->view('template/footer');
	}
	
	public function post($link){
		$data['artikel'] = $this->model('Home_model')->getArtikel($link);
		$data['video'] = $this->model('Home_model')->getVideo($link);
		$data['contoh'] = $this->model('Home_model')->getContoh($link);
		$data['title'] = str_replace('-', ' ', $link);
		$this->view('template/header');
		$this->view('home/post', $data);
		$this->view('template/footer');
	}
	
	
}


?>
