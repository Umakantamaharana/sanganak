<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
    }
		
	public function login(){
        $data = array();
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email','Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
            if ($this->form_validation->run() == true) {
                $con['returnType'] = 'single';
                $con['conditions'] = array(
                    'email'=>$this->input->post('email'),
                    'phone' => $this->input->post('password'),
                    'status' => '1'
                );
                $checkLogin = $this->Register_model->getRows($con);
                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn',TRUE);
                    $this->session->set_userdata('userId',$checkLogin['id']);
					
                    redirect('Account_controller/account');
                }else{
                    $data['error_msg'] = '<script>alert("Wrong Email or Password Please Try again.");</script>';
                }
            }
        }
        //load the view
        $this->load->view('login_view', $data);
    }
}
?>