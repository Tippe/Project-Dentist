<?php
    class Auth extends ci_controller{

        public function __construct(){
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }

        public function login(){
            $data['title'] = 'Login';
            /**  checks if fields are filled */
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'passsword', 'required');
            /** if one or more fields are empty give error on login form */
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('users/login', $data);
                $this->load->view('templates/footer');
            } else {
                /** if fields are filled try login function within auth_model */ 
                $this->load->model('auth_model');
                $this->auth_model->login();
            }
        }

        public function register(){
            $data['title'] = 'register';
            /**  checks if fields are filled */
            $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
            /** if username is taken it will show the message Username is taken.*/
            $this->form_validation->set_message('is_unique', '%s is taken.');
            /** password needs atleast 8 characters */
            $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
            /** need to be the same as password1 */
            $this->form_validation->set_rules('password2', 'confirm password', 'required|min_length[8]|matches[password]');
            /** email needs to be valid  */
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            /**$this->form_validation->set_rules('gender', 'gender', 'required');**/
            if ($this->form_validation->run() === FALSE) {
                /** looks if form is ok with form validation if not give error*/
                $this->load->view('templates/header');
                $this->load->view('users/register', $data);
                $this->load->view('templates/footer');
            } else {
                /** if fields are correct go to function register within auth_model */
                $this->load->model('auth_model');
                $this->auth_model->register();
                $this->session->set_flashdata("succeed", "Your account has been created.");
                redirect("auth/register", "refresh");
            }
        }

        public function logout(){
            /** logout will kill session information so user wont be logged in when he/she want to visit next time */
            session_destroy();
            redirect('auth/login');
        }
        public function backend() {
        //$this->load->view('templates/backend_header');
        $this->load->view('backend/index');
        //$this->load->view('templates/backend_footer');
        }
    }
?>