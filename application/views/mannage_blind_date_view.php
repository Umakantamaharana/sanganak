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
    <h5>Welcome <?php echo $user['name']; ?>!</h5>
    <a href="<?php echo site_url('Player_list_controller/blind_date_player_list'); ?>" target="new"><button>GENERATE PDF</button></a>
    

<table class="table table-hover">
  <thead>
    <tr>
      <th>sl. No.</th> 
      <th scope="col">TRANSACTION No.</th>
      <th scope="col">PLAYERS NAME</th>
      <th scope="col">COLLEGE NAME</th>
      <th scope="col">PHONE No</th>
      <th scope="col">STATUS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php 
   $count = '1';
  if(count($posts)){?>
  <?php foreach((array) $posts as $post){ ?>
  
    <tr class="table-active">
      <td><?php echo $count;?></td>
      <td><?php echo $post['transaction_no']; ?></td>
      <td><?php echo $post['name']; ?></td>
      <td><?php echo $post['college_name']; ?></td>
      <td><?php echo $post['phone']; ?></td>
      <td>
	  <?php $status= $post['status'];
		if($status==0){
			 echo "INACTIVE" ;
		}else{
			 echo "ACTIVE" ;
		}
			?> 
	</td>
      <td>
	  <?php $status= $post['status'];
if($status==0){
	 echo anchor("mannage_blind_date_controller/active/{$post['id']}", 'ACTIVATE', ['class'=>'label label-primary']);
}else{
	 echo anchor("mannage_blind_date_controller/inactive/{$post['id']}", 'DEACTIVATE', ['class'=>'label label-warning']);
}
	?>  
	  <?php echo anchor("mannage_blind_date_controller/update/{$post['id']}", 'Update', ['class'=>'label label-success']);?>
      <?php echo anchor("mannage_blind_date_controller/delete/{$post['id']}", 'Delete', ['class'=>'label label-danger']);?>
	  </td>
    </tr>
	
  <?php $count++; } ?>
  <?php } else{ ?>
<tr> </tr>
   
  <?php } ?> 
    
  </tbody>
</table>
</div>

<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>