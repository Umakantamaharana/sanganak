<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href=""/>

<style>

</style>

</head>

<body>

<div class="container-fluid image_home pubg">
  <div class="container"><br><br><br><br>
    <h1 class="text-center">SANGANAK TEAM</h1>
  

  <br><br>
  <div class="row">
	
	<div class="col-sm-4" style="background-color:;">
President:<br>
Dr. Prafulla Kumar Behera<br>
HoD, CSA <br>   
    </div>
	
	<div class="col-sm-4" style="background-color:;">
    Convener:<br>
Dr. Mrutyunjaya Panda<br>  
    </div>
	
	<div class="col-sm-4" style="background-color:;">
Co-Convener:<br>
Mr. Haraprasad Naik<br>  
    </div>
	
	</div><br>
	
<div class="row">	
	<div class="col-sm-4" style="background-color:;">   
Secretary:<br>
Prabhudutta Rout<br> +917538038239<br> 
    </div>
	
	<div class="col-sm-4" style="background-color:;"> 
Joint-Secretary:<br>
Laxmi Priya Rout <br>+916370599575<br>
    </div>
	
	<div class="col-sm-4" style="background-color:;">
 Treasurer:<br>
Arbind Kar<br>
    </div>
	
	</div><br>
	
<div class="row">

	<div class="col-sm-6" style="background-color:;">
 Technical Developer<br>
Abhijeet Kumar Murmu (+917008040169)<br>
Bijay Kumar Murmu (+918457066415)
<br>		
    </div>
	
	</div><br><br></br>
 
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