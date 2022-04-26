<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout_controller extends CI_Controller {



public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
        $this->session->sess_destroy();
        redirect('Login_controller/login');
    }
	
}
?>