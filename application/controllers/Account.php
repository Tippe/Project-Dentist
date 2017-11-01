<?php
class Account extends ci_controller {
    
	public function __construct(){
        parent::__construct();
        $this->load->model('auth_model');
        $this->load->helper('url_helper');
    }

	public function account_details($id) {
		$data['users'] = $this->auth_model->get_user_by_id($id);
        $data['title'] = 'User Account';

        if(empty($data['users'])){ // Als de user data leeg is geeft hij een error aan en gaat terug naar de home pagina
            echo'<div class="alert alert-danger text-center">User details does not exist.</div>';
            $data['title'] = 'Home';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        } elseif($data['users']['id'] == $this->session->userdata('id')){ // Als de user id overeen komt met de ingelogde user laat hij de account details zien
            $this->load->view('templates/header', $data);
            $this->load->view('users/account', $data);
            $this->load->view('templates/footer');
        } else { // Als de user id NIET overeen komt met de ingelogde user geeft hij aan dat jij deze niet mag zien
            echo '<div class="alert alert-danger text-center">You are not authorized to see this user details.</div>';
            $data['title'] = 'Home';
            $this->load->view('templates/header', $data);
            $this->load->view('pages/home');
            $this->load->view('templates/footer');
        }
	}
}
?>
