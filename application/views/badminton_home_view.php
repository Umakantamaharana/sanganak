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
    <h3 class="text-center">PUBG Mobile Rules in SANGANAK-2020</h3>
    
<h5>1.Eligibility:</h5>

<h5>2.Registration:</h5>

<h5>3.GAME RULES:</h5>


<h5>4.PENALTIES: </h5> 

<h5>5.PLACEMENT POINTS:</h5>

<h5>6.BATTLE INFORMATION :</h5>

<h5>7.Prize Money:</h5>
	The winner of the finale will be awarded with a sum of Rs.5000/-(Five Thousand Only) and chicken dinner.<br><br>

			 
				 <p class="footInfo text-center" style="color:#FFF">All clear about this? <a class= "btn btn-primary" href="<?php echo site_url('Pubg_home_controller/payment'); ?>"style="color:#FF5733">Go For payment.</a></p>
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