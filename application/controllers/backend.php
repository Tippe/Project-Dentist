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

    public function create(){
        $data['title'] = 'Create User';
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_message('is_unique', '%s is taken.');
        $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
        $this->form_validation->set_rules('password2', 'confirm password', 'required|min_length[8]|matches[password]');
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Failed!! Please try again.</div>');
            $this->load->view('templates/backend_header');
            $this->load->view('backend/create');
            $this->load->view('templates/backend_footer');
        } else {
            $passwordhash = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $data = array(
                    'username' => $_POST['username'],
                    'password' => $passwordhash,
                    'firstname' =>$_POST['firstname'],
                    'prefix' => $_POST['prefix'],
                    'lastname' => $_POST['lastname'],
                    'adress' => $_POST['adress'],
                    'city' => $_POST['city'],
                    'postalcode' => $_POST['postalcode'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone']
            );
            $this->session->set_flashdata('succeed', '<div class="alert alert-success text-center">User Account has been Created.</div>');
            $this->db->insert('users', $data);
            $this->load->view('templates/backend_header');
            $this->load->view('backend/create');
            $this->load->view('templates/backend_footer');
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
    }

     public function logout(){
            session_destroy();
            redirect('home');
        }
}
    