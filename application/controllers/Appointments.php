<?php
class Appointments extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('Appointments_model');
        $this->load->helper('url_helper');
    }
 
    public function index(){
        $data['appointments'] = $this->Appointments_model->get_appointments();
        $data['title'] = 'Appointments';
 
        $this->load->view('templates/header', $data);
        $this->load->view('appointments/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($id){
        $data['appointment'] = $this->Appointments_model->get_appointments_by_id($id);
        $data['title'] = 'Appointment View';
        if (empty($data['appointment'])){ die('no appointments found'); }
        $this->load->view('templates/header', $data);
        $this->load->view('appointments/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create a appointment';
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('user_id', 'UserID', 'required');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('appointments/create', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Appointments_model->set_appointments();
            $this->load->view('templates/header', $data);
            $this->load->view('appointments/success');
            $this->load->view('templates/footer');
            //redirect( base_url() . '/appointments/view', $data);
        }
    }
    
    public function edit(){
        $id = $this->uri->segment(3);

        if (empty($id)){
            show_404();
        }
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Edit a appointment';        
        $data['appointment'] = $this->Appointments_model->get_appointments_by_id($id);
        
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('user_id', 'UserID', 'required');
        if ($this->form_validation->run() === FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('appointments/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Appointments_model->set_appointments($id);
            //$this->load->view('appointments/success');
            redirect( base_url() . 'appointments/view/'.$id, $data);
        }
    }
    
    public function delete(){
        $id = $this->uri->segment(3);
        if (empty($id)){ show_404(); }
        $appointment = $this->Appointments_model->get_appointments_by_id($id);
        $this->Appointments_model->delete_appointments($id);        
        redirect( base_url() . '/appointments/index');        
    }
}