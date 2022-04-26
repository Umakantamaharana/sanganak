<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css')?>"/>

<style>

</style>



</head>

<body>

<div class="progressive-effects" id="skills" style="color:#FFF">
  <div class="container">
    <h3 class="text-center">PAYMENT PROCESS</h3>
    <h3>You can pay Rs-100 any of the following options .</h3>
 
 <div class="row">
	
	
	<div class="col-sm-6">
	<h5>1- PHONEPAY APP</h5><br>
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/images/payment/b_phonepay.jpg')?>" alt="Paris" width="400" height="300">
          
        </div>
      </div>
      <div class="col-sm-6">
	  <h5>2- GOOGLE PAY APP</h5><br>
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/images/payment/b_googlepay.jpg')?>" alt="New York" width="400" height="300">
          
        </div>
      </div>
      <div class="col-sm-6">
	  <h5>3- PAYTM APP</h5><br>
        <div class="thumbnail">
          <img src="<?php echo base_url('assets/images/payment/b_paytm.jpg')?>" alt="San Francisco" width="400" height="300">
          
        </div><br>
       
      </div>
	  
	
	</div>
	

 <p class="footInfo text-center" style="color:#FFF">All ready Payment? <a class= "btn btn-primary" href="<?php echo site_url('cricket_registration_controller/register'); ?>"style="color:#FF5733">Go For Registration.</a></p>
 </div>
			<br><br><br><br><br>
			
</div>

<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
<script type="text/javascript">
var FormStuff = {
  
  init: function() {
    this.applyConditionalRequired();
    this.bindUIActions();
  },
  
  bindUIActions: function() {
    $("input[type='radio'], input[type='checkbox']").on("change", this.applyConditionalRequired);
  },
  
  applyConditionalRequired: function() {
    
    $(".require-if-active").each(function() {
      var el = $(this);
      if ($(el.data("require-pair")).is(":checked")) {
        el.prop("required", true);
      } else {
        el.prop("required", false);
      }
    });
    
  }
  
};

FormStuff.init();
</script>
</html>