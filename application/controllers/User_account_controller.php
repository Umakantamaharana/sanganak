<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_account_controller extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Register_model');
        $this->load->model('User_model');
    }
	
	public function account(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
            
            $id=$this->session->userdata('userId');
			//echo $id; exit;
			$data['get_cultural_event_name'] = $this->User_model->get_cultural_event_name($id);
			$data['get_fun_event_name'] = $this->User_model->get_fun_event_name($id);
			$data['get_game_event_name'] = $this->User_model->get_game_event_name($id);
			$data['get_technical_event_name'] = $this->User_model->get_technical_event_name($id);
            //load the view
            $this->load->view('user_account_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
    
    
    public function delete_technical_event($id){
		
		$this->db->where('id', $id);
        $this->db->delete('tech_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'User_account_controller/account';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function delete_game_event($id){
		
		$this->db->where('id', $id);
        $this->db->delete('game_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'User_account_controller/account';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function delete_fun_event($id){
		
		$this->db->where('id', $id);
        $this->db->delete('fun_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'User_account_controller/account';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
	public function delete_cultural_event($id){
		
		$this->db->where('id', $id);
        $this->db->delete('cultural_event');
		echo '<script>alert("Successfully deleted!");</script>';
	
	     $url = 'User_account_controller/account';
         echo '<script>window.location.href = "'.base_url().'index.php?/'.$url.'";</script>';
	}
	
}
?>