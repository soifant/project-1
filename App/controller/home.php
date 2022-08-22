<?php

class home{
	public function index(){
		$data['artikel'] = $this->model('Home_model')->getArtikel();
		$this->view('template/header');
		$this->view('home/index', $data);
		$this->view('template/footer');
	}
	
	public function post($link){
		$data['artikel'] = $this->model('Home_model')->getPost($link);
		$this->view('template/header');
		$this->view('home/post', $data);
		$this->view('template/footer');
	}

}


?>
