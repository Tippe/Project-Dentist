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
        if ($this->session->role_id == '99'){
        $this->load->view('backend/index', $data);
    }
    else{
        $this->load->view('errors/index');
        //$this->load->view('templates/backend_footer');
    }
    }

}