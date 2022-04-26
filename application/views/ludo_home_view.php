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
h5{
	text-align:left;
	font-size:20px;
	padding:1%;
	color:orange;
}
</style>



</head>

<body>

<div class="progressive-effects" id="skills" style="color:#FFF">
  <div class="container">
    <h3 class="text-center">LUDO in SANGANAK-2020</h3>
    
<h5>REGISTRATION PROCESS :</h5>
1.	The participant must have to give an IDENTITY PROOF and registered himself/herself through online for the event.<br>
2.	The last date of registration is 10.02.2020 and the event will held on 13.02.20<br>
3.	Entry fee is 10/- rupees for each participates. Mode of payments are GOOGLE PAY / PHONE PAY and PAYTM .<br>
4.	In case of any issue the organizer decision will be the final decision.<br>


<br><br>

			 
				 <p class="footInfo text-center" style="color:#FFF">All clear about this? <a class= "btn btn-primary" href="<?php echo site_url('Ludo_home_controller/payment'); ?>"style="color:#FF5733">Go For payment.</a></p>
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