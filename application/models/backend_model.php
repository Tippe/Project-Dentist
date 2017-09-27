<?php
class backend_model extends CI_Model{

    public function __construct()
    {
        parent:: __construct();
        $this->load->database();
    }


public function getUsers(){
	$query = $this->db->get('users');
    return $query->result_array();
}

}