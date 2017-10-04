<?php 
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			$this->load->view('templates/header');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}
	// class Pages (name of controller) extends CI_Controller (main controller that all of the controllers have to extend){
	// public function view($page (here is gonna go and pass the page) = 'home'){