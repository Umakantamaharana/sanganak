<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->model('Register_model');
    }
    
    
    /*
     * User registration
     */
    public function register(){
        $data = array();
        $userData = array();
        if($this->input->post('regisSubmit')){
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('college_name', 'College_Name', 'required');
			
            $this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required');
            $this->form_validation->set_rules('roll_no', 'Roll_Number', 'required');
			$this->form_validation->set_rules('phone', 'Phone_Number', 'required');
            
            $userData = array(
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
				'college_name' => strip_tags($this->input->post('college_name')),
				
                'department' => strip_tags($this->input->post('department')),
				'year' => strip_tags($this->input->post('year')),
                'roll_no' => strip_tags($this->input->post('roll_no')),
				'phone' => strip_tags($this->input->post('phone'))
                
            );

            if($this->form_validation->run() == true){
                $insert = $this->Register_model->insert($userData);
                if($insert){
                    
                    $config_email['protocol'] = 'mail';
                    $config_email['mailtype'] = 'html';
                    $this->email->initialize($config_email);
					
					$this->email->from('sanganak.uu@gmail.com');
					$this->email->to(set_value('email'), set_value('name'));
					$this->email->subject('Your Account Login Id & Password .');
					$this->email->message('Login Id :');
					$this->email->message(set_value('email'));
					$this->email->message('Password :');
					$this->email->message(set_value('phone'));
					$this->email->send();
                    
                    $this->session->set_userdata('success_msg',  '<script>alert("Your registration was successfull. Please login to your account. Login Id: EMAIL Id, Password:  PHONE No.");</script>');
					//echo '<script>alert("You Have Successfully Registered For This Event!");</script>';
                    
                    redirect('Login_controller/login');
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
        $data['user'] = $userData;
        //load the view
        $this->load->view('register_view', $data);
    }
    
    /*
     * User logout
     */
    
    
    /*
     * Existing email check during validation
     */
    public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->Register_model->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', '<script>alert("The Given Email Already Exist.");</script>');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
