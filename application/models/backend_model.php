<?php
class backend_model extends CI_Model{

    public function __construct(){
        parent:: __construct();
        $this->load->database();
    }

	public function getUsers(){
		$query = $this->db->get('users');
	    return $query->result_array();
	}

    public function get_user_by_id($id = 0)
    {
        if ($id === 0)
        {
            $query = $this->db->get('users');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('users', array('id' => $id));
        return $query->row_array();
    }

    public function setUser($id = 0)
    {
        $this->load->helper('url');
 
        $data = array(
            //'username' => $this->input->post('username'),
            'firstname' => $this->input->post('firstname'),
            'prefix' => $this->input->post('prefix'),
            'lastname' => $this->input->post('lastname'),
            'email' => $this->input->post('email'),
            'adress' => $this->input->post('adress'),
			'postalcode' => $this->input->post('postalcode'),
			'city' => $this->input->post('city'),
			'phone' => $this->input->post('phone')
        );

        if ($id == 0) {
            return $this->db->insert('users', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('users', $data);
        }
    }

    public function create(){
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
        $this->db->insert('users', $data);
    }
    
    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('users');
    }
}