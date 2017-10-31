<?php
class Backend extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('backend_model');
        $this->load->model('auth_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');

    }

    public function index() {
        $data['users'] = $this->backend_model->getUsers();

        if ($this->session->role_id == '99'){
        $this->load->view('templates/backend_header');    
        $this->load->view('backend/index', $data);
        $this->load->view('templates/backend_footer');
        } else {
            $this->load->view('errors/index');
        }
    }

    public function create(){
        $data['title'] = 'Create User Account';
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_message('is_unique', '%s is taken.');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
        $this->form_validation->set_rules('password2', 'confirm password', 'required|min_length[8]|matches[password]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/backend_header');
            $this->load->view('backend/create', $data);
            $this->load->view('templates/backend_footer');
        } else {
            $passwordhash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->load->model('backend_model');
            $this->backend_model->create();

            $this->session->set_flashdata('succeed', '<div class="alert alert-success text-center">User Account has been Created.</div>');
            redirect("backend/create", "refresh");
        }
    }

    public function edit(){
        $id = $this->uri->segment(3);
        
        if (empty($id)){
            show_404();
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
              
        $data['user'] = $this->backend_model->get_user_by_id($id);
        
        $this->form_validation->set_rules('username', 'username');
        $this->form_validation->set_rules('firstname', 'firstname', 'required');
        $this->form_validation->set_rules('prefix', 'prefix');
        $this->form_validation->set_rules('lastname', 'lastname', 'required');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('adress', 'adress', 'required');
        $this->form_validation->set_rules('postalcode', 'postalcode', 'required');
        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('phone', 'phone', 'required');
 
        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/backend_header');
            $this->load->view('backend/edit', $data);
            $this->load->view('templates/backend_footer');
        } else {
            $this->backend_model->setUser($id);
            redirect(base_url('backend/index'));
        }
    }

    public function delete(){
        $id = $this->uri->segment(3);
        $appointment = $this->backend_model->get_user_by_id($id);
        $this->backend_model->delete_user($id);
        redirect('backend/index');
    }

     public function logout(){
            session_destroy();
            redirect('home');
        }
}
    