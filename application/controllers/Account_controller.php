<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
    }
	
	public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
           $role = $this->session->userdata('userId');
	//echo $role;exit;
				
	if($role ==1){
		redirect('Admin_account_controller/account');
	}
	else{
		redirect('User_account_controller/account');
	}
          
            
        }else{
            redirect('Login_controller/login');
        }
    }
	
}
?>