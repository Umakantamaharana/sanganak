<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Badminton_home_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
    }
    public function home(){
		$this->load->view('badminton_home_view');
	}
	
	public function payment(){
		$this->load->view('badminton_payment_view');
	}
    
	public function message(){
		$this->load->view('badminton_message_view');
	}
	
}
