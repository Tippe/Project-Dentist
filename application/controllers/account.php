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

        if (empty($data['users']))
        {
            die('kan deze account_details niet vinden.');
        }
 
        $this->load->view('templates/header', $data);
        $this->load->view('users/account', $data);
        $this->load->view('templates/footer');
	}
}
?>