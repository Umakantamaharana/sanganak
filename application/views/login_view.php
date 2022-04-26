<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="assets/css/header.css"/>
</head>

<body>

<div id="tour" class="bg-1 image_home" style="background-image:url('<?php echo base_url( 'assets/images/slide-2.jpg'); ?>');" width="100%">
<br><br>
<div class="container login-form">
    <h3>User Login</h3>
    <?php
    if(!empty($success_msg)){
        echo '<p class="statusMsg">'.$success_msg.'</p>';
    }elseif(!empty($error_msg)){
        echo '<p class="statusMsg">'.$error_msg.'</p>';
    }
    ?>
    <form action="" method="post">
	
	<div class="row">
	<div class="col-md-6">
        <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email" required="" value="">
            <?php echo form_error('email','<span class="help-block">','</span>'); ?>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Password" required="">
          <?php echo form_error('password','<span class="help-block">','</span>'); ?>
        </div>
		</div>
		</div>
        <div class="form-group">
            <input type="submit" name="loginSubmit" class="btn-primary" value="Submit"/>
        </div>
    </form>
    <p class="footInfo" style="color:#FFF">Don't have an account? <a href="<?php echo site_url('register_controller/register'); ?>" style="color:#FF5733">Register here</a></p>
</div><br><br><br><br><br><br><br><br><br><br><br><br>
</div>

<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>