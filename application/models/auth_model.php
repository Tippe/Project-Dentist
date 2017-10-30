<?php
class auth_model extends CI_Model{

    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

    public function login(){
        /**both variables are form fields */
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = $this->get_hash($username);
                    if ($this->verifyPassword($password, $hash)){
                            $roleId = $this->getRoleId($username);
                            $id = $this->getUserId($username);
                            $this->session->set_userdata('user_logged', TRUE);
                            $this->session->set_userdata('username', $username);
                            $this->session->set_userdata('role_id', $roleId);
                            $this->session->set_userdata('id', $id);
                /** redirect to new page behind login page*/
                if ($this->session->role_id == '99'){
                    redirect('backend/index');
                }
                else{
                redirect('home');
                }
            }
        /** if $query is empty give error on login page*/
        else{
            $this->session->set_flashdata("ERROR", "Invalid username or password!");
            redirect("auth/login", "refresh");
        }
    }

    public function get_hash($username){
            if($username != NULL){
            /** Query gets generated to look if user exists */
            $this->db->select('password');
            $this->db->from('users');
            $this->db->where('username', $username);
            $query = $this->db->get();
            /** if statement looks if query is filled with results */

            if($query->num_rows() > 0) {
                /** @var  $user  query row get ranamed  */
                $user = $query->row();
                /** looks if query has username in it */
                $hash = $query->result_object[0]->password;
                return $hash;
            }
        }
            else{
                die("Something went wrong.");
            }
    }

    public function getRoleId($username){
        $this->db->select('role_id');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        $result = $query->row();
        return $result->role_id;
    }

    public function getUserId($username){
        $this->db->select('id');
        $this->db->from('users');
        $this->db->where('username', $username);
        $query = $this->db->get();
        $result = $query->row();
        return $result->id;
    }

    public function register(){
        $passwordhash = password_hash($_POST['password'], PASSWORD_BCRYPT);
        /** data array is filled with register form fields  */
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
        /** insert data array into table users */
        $this->db->insert('users', $data);
    }

    public function get_user_by_id($id = 0){
        if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }


function verifyPassword($login_password, $user_password) {
    if (password_verify($login_password, $user_password) ) {
        return true;
    }
    else{
  echo "the password is incorrect.";
    return false;
    }
}
}