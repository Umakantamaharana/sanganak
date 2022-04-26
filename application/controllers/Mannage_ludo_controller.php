<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mannage_ludo_controller extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_model');
		$this->load->model('Register_model');
    }
    
    /*
     * User account information
     */
    public function mannage(){
        $data = array();
        if($this->session->userdata('isUserLoggedIn')){
            $data['user'] = $this->Register_model->getRows(array('id'=>$this->session->userdata('userId')));
			
			$data['posts']=$this->Admin_model->ludo_getview();
		//print_r($posts);exit;
		
            $this->load->view('mannage_ludo_view', $data);
        }else{
            redirect('Login_controller/login');
        }
    }
	
	public function active($id){
		
		
			$data['posts']=$this->Admin_model->ludo_active($id);
		
		if($data['posts']){
	//	$this->session->set_flashdata('Activated', '<script>alert("Your data was Activated successfully.");</script>');
        echo '<script>alert("Your data was Activated successfully.");</script>';		
		}
		else{
			$data['error_msg'] = 'Some problems occured, please try again.';
		} 
		   	$url = 'Mannage_ludo_controller/mannage';
echo'
<script>
window.location.href = "'.base_url().'index.php?/'.$url.'";
</script>
';
		
			//return redirect('Mannage_ludo_controller/mannage');
	}
	
	public function inactive($id){
		
		$data['posts']=$this->Admin_model->ludo_inactive($id);
		
		if($data['posts']){
	//	$this->session->set_flashdata('Activated', '<script>alert("Your data was Activated successfully.");</script>');
        echo '<script>alert("Your data was Deactivated successfully.");</script>';		
		}
		else{
			$data['error_msg'] = 'Some problems occured, please try again.';
		} 
		   	$url = 'Mannage_ludo_controller/mannage';
			echo'
			<script>
			window.location.href = "'.base_url().'index.php?/'.$url.'";
			</script>
			';
		
			//return redirect('Mannage_ludo_controller/mannage');
	}
	
	public function delete($id){
		
		if($data['posts']=$this->Admin_model->ludo_delete($id)){
		//$this->session->set_flashdata('Deleted', 'Your data was deleted successfully.');
echo '<script>alert("Your data was deleted successfully!");</script>';		
		}
		else{
			$data['error_msg'] = 'Some problems occured, please try again.';
		}
		
			$url = 'Mannage_ludo_controller/mannage';
echo'
<script>
window.location.href = "'.base_url().'index.php?/'.$url.'";
</script>
';
		//return redirect('Mannage_ludo_controller/mannage');
	}
	
	}
	?>