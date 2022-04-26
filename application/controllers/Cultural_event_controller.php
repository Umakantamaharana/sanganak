<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cultural_event_controller extends CI_Controller {

public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
		$this->load->library('session');
        $this->load->model('User_model');
		$this->load->model('Register_model');
    }
    
  function cultural_event_check()
{  
    $event_name = trim($this->input->post('event_name'));
	$event_name = strtolower($event_name);
	$id=$this->session->userdata('userId');
	$get_result = $this->User_model->cultural_event_check($event_name,$id);
	
	if(!$get_result ) {
	echo '<script>alert("You Have Already Take Part In This Event!");</script>';
	
	$url = 'cultural_event_controller/event';
echo'
<script>
window.location.href = "'.base_url().'index.php?/'.$url.'";
</script>
';
        } else {
            return TRUE;
        }
}  
    
    public function event(){
		$data = array();
		if($this->session->userdata('isUserLoggedIn')){
			
        $userevent = array();
		$id=$this->session->userdata('userId');
		$uservalue = $this->User_model->getvalue($id);
		$data['uservalue'] = $uservalue;
		
        		
		 if($this->input->post('Submit1')){
            $this->form_validation->set_rules('name1', 'Name', 'required');
			$this->form_validation->set_rules('name2', 'Name');
			$this->form_validation->set_rules('name3', 'Name');
			$this->form_validation->set_rules('name4', 'Name');
			$this->form_validation->set_rules('event_name', 'Name', 'required|callback_cultural_event_check');
            
            $userData = array(
                'name' => strip_tags($this->input->post('name1')),
				'name2' => strip_tags($this->input->post('name2')),
				'name3' => strip_tags($this->input->post('name3')),
				'name4' => strip_tags($this->input->post('name4')),
				'event_name' => $this->input->post('event_name'),
                'clogin_id' => $id
    
            );

            if($this->form_validation->run() == true){
                $insert = $this->User_model->cultural_insert($userData);
                if($insert){
                    echo '<script>alert("You Have Successfully Registered For This Event!");</script>';
                    $url = 'cultural_event_controller/event';
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
		
		
		
		if($this->input->post('Submit2')){
            $this->form_validation->set_rules('name1', 'Name', 'required');
			$this->form_validation->set_rules('name2', 'Name');
			$this->form_validation->set_rules('name3', 'Name');
			$this->form_validation->set_rules('name4', 'Name');
			$this->form_validation->set_rules('event_name', 'Name', 'required|callback_cultural_event_check');
            
            $userData = array(
                'name' => strip_tags($this->input->post('name1')),
				'name2' => strip_tags($this->input->post('name2')),
				'name3' => strip_tags($this->input->post('name3')),
				'name4' => strip_tags($this->input->post('name4')),
				'event_name' => $this->input->post('event_name'),
                'clogin_id' => $id
    
            );

            if($this->form_validation->run() == true){
                $insert = $this->User_model->cultural_insert($userData);
                if($insert){
                    echo '<script>alert("You Have Successfully Registered For This Event!");</script>';
                    $url = 'cultural_event_controller/event';
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
		
		
		
		if($this->input->post('Submit3')){
            $this->form_validation->set_rules('name1', 'Name', 'required');
			$this->form_validation->set_rules('name2', 'Name');
			$this->form_validation->set_rules('name3', 'Name');
			$this->form_validation->set_rules('name4', 'Name');
			$this->form_validation->set_rules('event_name', 'Name', 'required|callback_cultural_event_check');
            
            $userData = array(
                'name' => strip_tags($this->input->post('name1')),
				'name2' => strip_tags($this->input->post('name2')),
				'name3' => strip_tags($this->input->post('name3')),
				'name4' => strip_tags($this->input->post('name4')),
				'event_name' => $this->input->post('event_name'),
                'clogin_id' => $id
    
            );

            if($this->form_validation->run() == true){
                $insert = $this->User_model->cultural_insert($userData);
                if($insert){
                    echo '<script>alert("You Have Successfully Registered For This Event!");</script>';
                    $url = 'cultural_event_controller/event';
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

            if($this->input->post('Submit4')){
            $this->form_validation->set_rules('name1', 'Name', 'required');
			$this->form_validation->set_rules('name2', 'Name' );
			$this->form_validation->set_rules('name3', 'Name' );
			$this->form_validation->set_rules('name4', 'Name');
			$this->form_validation->set_rules('event_name', 'Name', 'required|callback_cultural_event_check');
            
            $userData = array(
                'name' => strip_tags($this->input->post('name1')),
				'name2' => strip_tags($this->input->post('name2')),
				'name3' => strip_tags($this->input->post('name3')),
				'name4' => strip_tags($this->input->post('name4')),
				'event_name' => $this->input->post('event_name'),
                'clogin_id' => $id
    
            );

            if($this->form_validation->run() == true){
                $insert = $this->User_model->cultural_insert($userData);
                if($insert){
                    echo '<script>alert("You Have Successfully Registered For This Event!");</script>';
                    $url = 'cultural_event_controller/event';
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
				
if($this->input->post('Submit5')){
            $this->form_validation->set_rules('name1', 'Name', 'required');
		//	$this->form_validation->set_rules('name2', 'Name' );
		//	$this->form_validation->set_rules('name3', 'Name' );
		//	$this->form_validation->set_rules('name4', 'Name');
			$this->form_validation->set_rules('event_name', 'Name', 'required|callback_cultural_event_check');
            
            $userData = array(
                'name' => strip_tags($this->input->post('name1')),
			//	'name2' => strip_tags($this->input->post('name2')),
			//	'name3' => strip_tags($this->input->post('name3')),
			//	'name4' => strip_tags($this->input->post('name4')),
				'event_name' => $this->input->post('event_name'),
                'clogin_id' => $id
    
            );

            if($this->form_validation->run() == true){
                $insert = $this->User_model->cultural_insert($userData);
                if($insert){
                    echo '<script>alert("You Have Successfully Registered For This Event!");</script>';
                    $url = 'cultural_event_controller/event';
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
        
        $data['user'] = $userevent;
		
        //load the view
        $this->load->view('cultural_event_view', $data);
    }else{
            redirect('Login_controller/login');
        }
    }
	

	

	
    
}
?>