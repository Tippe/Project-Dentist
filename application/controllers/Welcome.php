<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
		$this->load->view('welcome_message');
	}


function loginProcess(){
    if ( isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $user = checkUser($username, $password); //check usernodig voor DB
        if ($user == false) {
            $_SESSION['errors'][] = 'Kon niet inloggen. Probeer het opnieuw.';
            header('location: ' . URL . 'CodeIgniter/login');
            exit;
        } else {
            $_SESSION['username'] = $user['username'];
            $_SESSION['useradmin'] = $user['kapper'];
            $_SESSION['userid'] = $user['id'];
    } else {
        $_SESSION['errors'][] = 'Vul alstublieft een gebruikersnaam en wachtwoord in.';
        header('location: ' . URL . 'CodeIgniter/login');
        exit;
    }
    header('location: ' . URL . 'home/index');
}
