<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">  
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url(); ?>assets/css/home_page.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div id="tour" class="bg-1 image_home" style="background-image:url('<?php echo base_url( 'assets/img/bglg.jpg'); ?>');" width="100%">

<div class="container admin-home">
    <div class="row">
	
	<div class="col-sm-6" style="background-color:;">
    <h3>Welcome <?php echo $user['name']; ?>!</h3>
    <div class="account-info" style="color:#FFF">
        <p><b>Name: </b><?php echo $user['name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        
     </div>   
    </div>
	
	<div class="col-sm-6" style="background-color:;">
    <h3>Mannage Account</h3>
    <div class="account-info">
        <a href="<?php echo site_url('mannage_pubg_controller/mannage');?>" class="btn btn-info" role="button">Mannage Pubg Account</a></br></br>
		<a href="<?php echo site_url('mannage_cricket_controller/mannage');?>" class="btn btn-info" role="button">Mannage Cricket Account</a></br></br>
        <a href="<?php echo site_url('mannage_ludo_controller/mannage');?>" class="btn btn-info" role="button">Mannage Ludo Account</a></br></br>
        <a href="<?php echo site_url('mannage_blind_date_controller/mannage');?>" class="btn btn-info" role="button">Mannage Blind Date Account</a></br></br>
        
		<a href="<?php echo site_url('Event_list_controller/c_coding_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage C-coding List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/paper_presentation_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Paper Presentation List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/quants_reasoining_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Quants & Reasoining List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/technical_quiz_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Technical Quiz List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/general_quiz_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage General Quiz List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/group_discussion_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Group Discussion List</a>&nbsp;
		
	<!--	<a href="<?php echo site_url('Event_list_controller/counter_strike_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Counter Strike List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/nfs_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage NFS List</a>
		<a href="<?php echo site_url('Event_list_controller/ludo_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Ludo List</a>&nbsp;
		
	
	-->
		
		<a href="<?php echo site_url('Event_list_controller/dums_e_raaj_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Dums-E-Raaj List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/paper_dance_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Paper Dance List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/music_chair_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Music Chair List</a>&nbsp;
		<a href="<?php echo site_url('Event_list_controller/drawing_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Drawing List</a>&nbsp;
		
		<a href="<?php echo site_url('Event_list_controller/cultural_list');?>" class="btn btn-info" role="button" style="width:250px">Mannage Cultural event List</a>
        
     </div>   
    </div>
	

	

</div>


<br><br><br>
</div>
</div>
<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>