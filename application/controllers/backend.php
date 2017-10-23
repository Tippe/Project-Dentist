<?php
class Backend extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('backend_model');
        $this->load->helper('url_helper');

    }

    public function index() {
        //$this->load->view('templates/backend_header');
        $data['users'] = $this->backend_model->getUsers();
        if ($this->session->role_id == '99'){
        $this->load->view('templates/backend_header');    
        $this->load->view('backend/index', $data);
        $this->load->view('templates/backend_footer');
    } else {
        $this->load->view('errors/index');
        //$this->load->view('templates/backend_footer');
        }
    }


   public function edit(){
        $id = $this->uri->segment(3);
        
        if (empty($id))
        {
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
              
        $data['user'] = $this->backend_model->get_user_by_id($id);
        
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('prefix', 'prefix', 'required');
        $this->form_validation->set_rules('lastname', 'lastname', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('adress', 'adress', 'required');
        $this->form_validation->set_rules('postalcode', 'postalcode', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
 
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/backend_header');
            $this->load->view('backend/edit', $data);
            $this->load->view('templates/backend_footer');
        }
        else
        {
            $this->backend_model->setUser($id);
            //$this->load->view('news/success');
            redirect( base_url() . 'backend/index');
        }
    }

    public function delete(){
        $id = $this->uri->segment(3); // Het 3e element uit de url

        if (empty($id)){
         show_404(); 
        }
        $appointment = $this->backend_model->get_user_by_id($id);
        $this->backend_model->delete_user($id);        
       //redirect( base_url() . '/backend/index');    


    }
}
    