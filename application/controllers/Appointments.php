<?php
class Appointments extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
        $this->load->model('Appointments_model');
        $this->load->helper('url_helper');
    }
 
    public function index(){
        $permission = $this->session->role_id;

        if ($this->session->user_logged == FALSE){
        redirect( base_url() . 'home');
    }
        if ($permission == '99' || $permission == '1'){
        $data['appointments'] = $this->Appointments_model->get_appointments();
    }
        elseif ($permission =='2') {
        $data['appointments'] = $this->Appointments_model->get_appointments_dentist();
    }
        elseif($permission =='3'){
        $data['appointments'] = $this->Appointments_model->get_appointments_guest();    
    }
    else{
        echo "Something went terrible, please try again.";
        die();
    }
        $data['title'] = 'Appointments';
 
        $this->load->view('templates/header', $data);
        $this->load->view('appointments/index', $data);
        $this->load->view('templates/footer');
    }
 
    public function view($id){
        $data['appointment'] = $this->Appointments_model->get_appointments_by_id($id);
        $data['title'] = 'Appointment View';

        if (empty($data['appointment'])){
            die('no appointments found');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('appointments/view', $data);
        $this->load->view('templates/footer');
    }
    
    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $data['title'] = 'Create Appointment';
        $this->form_validation->set_rules('date', 'Date', 'required');
        $this->form_validation->set_rules('time', 'Time', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        $this->form_validation->set_rules('user_id', 'UserID', 'required');
        $this->form_validation->set_rules('dentist_id','dentist_id', 'required');

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
        $data['title'] = 'Edit Appointment';        
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
            redirect( base_url() . 'appointments/view/'.$id, $data);
        }
    }
    
    public function delete(){
        $id = $this->uri->segment(3);

        if (empty($id)){
            show_404();
        }
        $appointment = $this->Appointments_model->get_appointments_by_id($id);
        $this->Appointments_model->delete_appointments($id);        
        redirect(base_url('appointments/index'));        
    }

        public function changepassword(){
            if ($this->session->user_logged == TRUE){
            $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('new_password', 'new_password', 'required|min_length[8]');
            $this->form_validation->set_rules('new_password_2', 'new_password_2', 'required|min_length[8]|matches[new_password]');
            $this->form_validation->set_message('matches', 'Password does not match');

            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('appointments/changepassword');
                $this->load->view('templates/footer');
            }   
            if ($this->form_validation->run() === TRUE) {
            $id = $this->session->id;
            if ($this->Appointments_model->change_password($id)){
                        echo"goodjob!";    
            }
            } 
    }

else{
            redirect(site_url() . '/home/');  
        }
    }
}
