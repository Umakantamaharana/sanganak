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
<div class="container admin-home">
    <h5>Music Chair Event</h5>
<a href="<?php echo site_url('Event_list_controller/music_chair_pdf'); ?>" target="new"><button>GENERATE PDF</button></a>
<table class="table table-hover">
  <thead>
    <tr>
	  <th>sl. No.</th> 
      <th scope="col">PARTICIPANT'S NAME</th>
	  <th scope="col">COLLEGE NAME</th>
      <th scope="col">DEPARTMENT</th>
	   <th scope="col">PHONE No.</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php 
 $count = '1';
  if(!empty($list)){?>
  <?php foreach($list as $list){ ?>
  
    <tr class="table-active">
	 <td><?php echo $count;?></td>
      <td><?php echo $list['name']; ?></td>
	  <td><?php echo $list['college_name']; ?></td>
      <td><?php echo $list['department']; ?></td>
	  <td><?php echo $list['phone']; ?></td>
      <td>
	 <!--  <a href="<?php echo site_url('Event_list_controller/edit_c_coding/'.$list['id']); ?>">Edit</a> -->
     <a href="<?php echo site_url('Event_list_controller/delete_music_chair/'.$list['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
    </tr>
	
  <?php  $count++;}?>
  
    
  </tbody>
  <?php }else{  echo "No Records Found."; } ?> 
</table>
  
</div>

<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>