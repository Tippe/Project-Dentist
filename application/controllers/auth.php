<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 13-Sep-17
 * Time: 5:19 PM
 */
    class auth extends ci_controller{


        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url_helper');
            $this->load->helper('form');
            $this->load->library('form_validation');
        }


        public function login()
        {

            $data['title'] = 'Aanmelden';
            /** controlleerd als username en password velden zijn gevuld */
            $this->form_validation->set_rules('username', 'gebruikersnaam', 'required');
            $this->form_validation->set_rules('password', 'wachtwoord', 'required');

            /** als  1 of beide velden leeg is  geef fout melden voor legen velden */
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('users/login', $data);
            }
            /** a;s beide velden gevuld zijn roep model functie check_user() aam */
            else {
                $this->load->model('auth_model');
                $this->auth_model->login();
            }
        }
        public function register()
        {

            $data['title'] = 'Registratie';
            /** form_validation checkt of elke veld is ingevuld */
            $this->form_validation->set_rules('username', 'username', 'required');
            /** password1 is verplicht en is verplicht met een minimale lengte van 8 karakters */
            $this->form_validation->set_rules('password', 'password', 'required|min_length[8]');
            /** password 2 is verplicht moet match zijn met password1 */
            $this->form_validation->set_rules('password2', 'password2', 'required|min_length[8]|matches[password]');
            /** email moet een geldige adress zijn */
            $this->form_validation->set_rules('email', 'email', 'required|valid_email');
            $this->form_validation->set_rules('geslacht', 'geslacht', 'required');

            if ($this->form_validation->run() === FALSE) {
                /** waneer velden leeg zijn geef validation error aan op register form */
                $this->load->view('users/register', $data);
            } else {
                /** als validation klopt word functie set_user() in register_model uitgevoerd en een refresh gegeven aan de pagina met een session flashdata */
                $this->load->model('auth_model');
                $this->auth_model->register();
                $this->session->set_flashdata("gelukt", "Uw account is aangemaakt.");
                redirect("auth/register", "refresh");
            }

        }
        public function logout(){
            /** logout.php zorgt alleen dat session gegevens vergeten worden zodat gebruiker niet meer actief staat. gebruiker moet opnieuw inloggen als hij/zij inside wilt benaderen */
            session_destroy();
            redirect('auth/login');
        }
    }

?>