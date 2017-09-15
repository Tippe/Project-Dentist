<?php
/**
 * Created by PhpStorm.
 * User: DustDustin
 * Date: 14-Sep-17
 * Time: 5:19 PM
 */
class auth_model extends CI_Model{

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }

    public function login(){
        /**both variables are form fields */
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        /** Query gets generated to look if user exists */
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where(array('username'=>$username, 'password'=>$password));
        $query = $this->db->get();
        /** if statement looks if query is filled with results */
        if($query->num_rows() > 0) {
            /** @var  $user  query row get ranamed  */
            $user = $query->row();

            /** looks if query has username in it */
            if ($user->username) {
                $this->session->set_flashdata('gelukt', 'je bent aangemeld');
                /** keeps user logged-in in session  */
                $_SESSION['user_logged'] = TRUE;

                /** redirect to new page behind login page*/
                redirect('[controller of next destination]', 'refresh');
            }
        }
        /** if $query is empty give error on login page*/
        else{
            $this->session->set_flashdata("ERROR", "Invalid username or password!");
            redirect("auth/login", "refresh");

        }
    }
    public function register()
    {
        /** data array is filled with register form fields  */
        $data = array(
            'username' => $_POST['username'],
            'password' =>md5($_POST['password']),
            'firstname' =>$_POST['firstname'],
            'prefix' => $_POST['prefix'],
            'lastname' => $_POST['lastname'],
            'adress' => $_POST['adress'],
            'city' => $_POST['city'],
            'postalcode' => $_POST['postalcode'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
        );
        /** insert data array into table users */
        $this->db->insert('users', $data);

    }
}