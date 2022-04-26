<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ludo_registration_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Ludo_register_model');
    }
    
   
     
    /*
     * User registration
     */
    public function register(){
        $data = array();
		$pgame = array();
        
        if($this->input->post('regisSubmit')){
			$this->form_validation->set_rules('transaction_no', 'Transaction_no', 'required|callback_transaction_no_check');
			$this->form_validation->set_rules('college_name', 'College_Name', 'required');
            $this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('year', 'Year', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
			$this->form_validation->set_rules('phone', 'Phone_Number', 'required');
            
            
			
			$pgame = array(
			
			    'transaction_no' => strip_tags($this->input->post('transaction_no')),
				'college_name' => strip_tags($this->input->post('college_name')),
                'department' => strip_tags($this->input->post('department')),
				'year' => strip_tags($this->input->post('year')),
                'name' => strip_tags($this->input->post('name')),
                'email' => strip_tags($this->input->post('email')),
				'phone' => strip_tags($this->input->post('phone')),
                'status' => '0'
            );

            if($this->form_validation->run() == true){
                $insert = $this->Ludo_register_model->insert($pgame);
                if($insert){
                    echo  '<script>alert("Your registration was successfull. Please wait for 24 hrs for admin approvel.");</script>';
                   
					$url = 'Ludo_home_controller/message';
echo'
<script>
window.location.href = "'.base_url().'index.php?/'.$url.'";
</script>
';
                }else{
                    $data['error_msg'] = 'Some problems occured, please try again.';
                }
            }
        }
       // $data['user'] = $userData;
		$data['game'] = $pgame;
        //load the view
        $this->load->view('ludo_registration_view', $data);
    }
	

    
    /*
     * Existing email check during validation
     */
     public function email_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('email'=>$str);
        $checkEmail = $this->Ludo_register_model->getRows($con);
        if($checkEmail > 0){
           $this->form_validation->set_message('email_check', '<script>alert("The Given Email Already Exist.");</script>');
            return FALSE;
        } else {
            return TRUE;
        }
    } 
	
	public function transaction_no_check($str){
        $con['returnType'] = 'count';
        $con['conditions'] = array('transaction_no'=>$str);
        $checkEmail = $this->Ludo_register_model->getRow($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('transaction_no_check', '<script>alert("The given transaction_no already exists.");</script>');
            return FALSE;
        } else {
            return TRUE;
        }
    }
}
