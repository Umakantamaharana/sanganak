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

<div class="container-fluid image_home pubg">
  <div class="container"><br><br>
    <h1 class="text-center">HOW TO REACH SANGANAK</h1><br>
<p>SANGANAK ,<br>
  Utkal Unversity ,<br>
  Department of Computer Science & Application.<br>
  sanganak.uu@gmail.com<br><br></p>
  
  <h5 class="text-left">Contact Person :</h5>
  <p>
  Prabhudutta Rout (Secretary)<br>
  +91-7538038239<br><br>
  
  Laxmi Priya Rout (Joint-Secretary)<br>
  +91-6370599575<br><br>
  
  Arbind Kar (Treasurer)<br>
  <br><br>
  
  For Technical Issues :<br>
 Abhijeet Kumar Murmu (+917008040169)<br>
Bijay Kumar Murmu (+918457066415)<br>

  </p>
 </div>
			<br><br>

<div class="w3-display-container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.8606679022364!2d85.83792706423283!3d20.306033567433992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19098d041dfe8b%3A0xffe657e89a98a751!2sPG%20Department%20of%20Computer%20Science%20%26%20Application!5e0!3m2!1sen!2sin!4v1580155738651!5m2!1sen!2sin" width="1335" height="649" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
 
</div>

			
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