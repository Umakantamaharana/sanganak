<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">  
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php //echo base_url(); ?>assets/css/home_page.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div id="tour" class="bg-1 image_home" style="background-image:url('<?php echo base_url( 'assets/images/bg1.jpg'); ?>');" width="100%">


<div class="container admin-home"><br><br><br>
    <div class="row">
	
	<div class="col-sm-12" style="color:#FFF;">
    <h2>Welcome <?php echo $user['name']; ?>!</h2>
    
    </div></div>
    <br>
	
	<div class="row">
	<div class="account-info">
	<h3 style="text-align:left;margin-left:2%">Your Take Part Events</h3>

	<?php
	if(!empty($get_technical_event_name))
	{
	foreach($get_technical_event_name as $ev)
	{
	?>
	<div style="margin:1%"><?php echo $ev['event_name']; ?>&nbsp;<a href="<?php echo site_url('User_account_controller/delete_technical_event/'.$ev['id']); ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn-danger">Delete</a></div>
	<?php
	}  
	}
	if(!empty($get_game_event_name))
	{
	foreach($get_game_event_name as $ev){?>
	<div style="margin:1%"><?php echo $ev['event_name']; ?>&nbsp;<a href="<?php echo site_url('User_account_controller/delete_game_event/'.$ev['id']); ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn-danger">Delete</a></div><?php
	}
	}
	if(!empty($get_fun_event_name))
	{
	foreach($get_fun_event_name as $ev){?>
	<div style="margin:1%"><?php echo $ev['event_name']; ?>&nbsp;<a href="<?php echo site_url('User_account_controller/delete_fun_event/'.$ev['id']); ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn-danger">Delete</a></div><?php
	}
	}
	if(!empty($get_cultural_event_name))
	{
	foreach($get_cultural_event_name as $ev){?>
	<div style="margin:1%"><?php echo $ev['event_name']; ?>&nbsp;<a href="<?php echo site_url('User_account_controller/delete_cultural_event/'.$ev['id']); ?>" onClick="return confirm('Are you sure you want to delete?')" class="btn-danger">Delete</a></div><?php
	}
	}
	?>
	</div>
    <br>
	<div class="account-info">
        <p style="color:#FFF;margin:1%">* If you don't want to take part in the above registered events then you can delete it or if you want to edit any of the event's info then first delete it then again registerd .</p>
       
        
    </div>
    
    
	</div>
	
	
	<div class="row">
	
	<div class="col-sm-12 text-center" style="background-color:;">
	<h3>REGISTER EVENTS</h3>
	<div class="col-sm-3">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event1.jpg')?>" alt="Paris" width="400" height="300">
          <p><strong>TECHNICAL EVENTS</strong></p>
          <a class="btn"  href="<?php echo site_url('technical_event_controller/event');?>">Register</a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event2.jpg')?>" alt="New York" width="400" height="300">
          <p><strong>GAMING EVENTS</strong></p>
          <a class="btn"  href="<?php echo site_url('gaming_event_controller/event');?>">Register</a>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event3.png')?>" alt="San Francisco" width="400" height="300">
          <p><strong>FUN EVENTS</strong></p>
          <a class="btn"  href="<?php echo site_url('fun_event_controller/event');?>">Register</a>
        </div>
      </div>
	  <div class="col-sm-3">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event9.jpg')?>" alt="Paris" width="400" height="300">
          <p><strong>CULTURAL EVENTS</strong></p>
          <a class="btn"  href="<?php echo site_url('cultural_event_controller/event');?>">Register</a>
        </div>
      </div>
	
	</div>
	
</div><br><br><br>


</div>
</div>
<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>