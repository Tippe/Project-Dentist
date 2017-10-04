<?php 
class appointments_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }
    
    public function get_appointments(){
        $query = $this->db->get('appointments');
        return $query->result_array();
    }
    
    public function get_appointments_by_id($id = 0){
        if ($id === 0){
            $query = $this->db->get('appointments');
            return $query->result_array();
        }
        $query = $this->db->get_where('appointments', array('id' => $id));
        return $query->row_array();
    }
    
    public function set_appointments($id = 0){
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'), 'dash', TRUE);
        $data = array(
            'date' => $this->input->post('date'),
            'time' => $this->input->post('time'),
            'description' => $this->input->post('description'),
            'user_id' => $this->input->post('user_id'),
        );
        if ($id == 0) {
            return $this->db->insert('appointments', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('appointments', $data);
        }
    }
    
    public function delete_appointments($id){
        $this->db->where('id', $id);
        return $this->db->delete('appointments');
    }
}