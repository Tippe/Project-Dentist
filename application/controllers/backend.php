<?php
class Backend extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('backend_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        //$this->load->view('templates/backend_header');
        $data['users'] = $this->backend_model->getUsers();
        $this->load->view('backend/index', $data);
        //$this->load->view('templates/backend_footer');
    }

}