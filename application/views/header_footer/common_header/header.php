<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<?php

if($this->session->userdata('isUserLoggedIn')){
	$role = $this->session->userdata('userId');
	//echo $role;exit;
				
	if($role ==1){
		$this->load->view('header_footer/common_header/admin_header');
	}
	else{
		$this->load->view('header_footer/common_header/user_header');
	}
            
        }else{
            $this->load->view('header_footer/common_header/common_header');
        }

?>


</html>