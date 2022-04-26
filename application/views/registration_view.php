<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/header.css"/>

</head>

<body>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1" style="background-image:url('<?php echo base_url( 'assets/img/bg1.jpg'); ?>');>
  <div class="container">
    <h3 class="text-center">EVENT REGISTRATION</h3>
    <p class="text-center" style="color:#FF5733  !important;">Registration start from 15th March.<br> Remember to register!</p>
    
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event1.jpg')?>" alt="Paris" width="400" height="300">
          <p><strong>Event1</strong></p>
          <p>Friday 27 November 2015</p>
          <a class="btn" data-toggle="modal" href="<?php echo site_url('event1_controller/event1');?>">Register</a>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event2.jpg')?>" alt="New York" width="400" height="300">
          <p><strong>Event2</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event3.png')?>" alt="San Francisco" width="400" height="300">
          <p><strong>Event3</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
    </div>
	
	
	<div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/paris.jpg')?>" alt="Paris" width="400" height="300">
          <p><strong>Event4</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/newyork.jpg')?>" alt="New York" width="400" height="300">
          <p><strong>Event5</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/sanfran.jpg')?>" alt="San Francisco" width="400" height="300">
          <p><strong>Event6</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" >Register</button>
        </div>
      </div>
    </div>
	
	
	<div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/paris.jpg')?>" alt="Paris" width="400" height="300">
          <p><strong>Event7</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/newyork.jpg')?>" alt="New York" width="400" height="300">
          <p><strong>Event8</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/img/event9.jpg')?>" alt="San Francisco" width="400" height="300">
          <p><strong>Event9</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Register</button>
        </div>
      </div>
    </div>

  </div>
  
 </div>



<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>