<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_account_controller extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
    }
    
    /*
     * User account information
     */
    public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
            //load the view
            $this->load->view('admin_acount_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	}
	?>