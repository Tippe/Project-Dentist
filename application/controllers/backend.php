<?php
class backend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('backend_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        //$this->load->view('templates/backend_header');
        $this->load->view('backend/index');
        //$this->load->view('templates/backend_footer');
    }

}