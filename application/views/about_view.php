<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  


<style>


</style>



</head>

<body>

<!-- About -->
  <div class="agileaboutaitsabout" id="agileaboutaitsabout">
    <div class="agileaboutaits">
      <div class="container"><br><br><br>

        <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-info">
          <h1>We love to unite!</h1>
          <P>“SANGANAK” is the annual technical festival of Utkal University organized by Dept. of Computer Science & Applications. It refers to the independent body of students who organize this event along with many other social initiatives and outreach programmes around the year. SANGANAK is known for hosting a variety of events that include competitions, seminars, lectures as well as workshops. Started in 2018 with the aim of providing a platform for the student community to develop and showcase their technical & innovation prowess. The activities culminate in a grand three-day festival event in the CSA campus which attracts different categories of people including students, academia, & general public.</P>
          
        </div>

        <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-image"></br></br>
          <div class="agileaboutaits-image-1">
            <img src="<?php echo base_url(); ?>/assets/img/about.gif" alt="Couture">
          </div>
         </div>
         
       
      </div>
    </div>
 </div>
  <!-- //About -->

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