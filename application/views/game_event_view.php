<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>
<?php $this->load->view('header_footer/common_header/main_header'); ?>
<?php $this->load->view('header_footer/common_header/header'); ?>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/home_page.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
<script>   
   $(document).ready(function() {
    $("#show_menu1").click(function () {
      $( ".list_container1" ).show(3000);
    });  
    $("#show_menu2").click(function () {
      $( ".list_container1" ).hide(3000);
    }); 
	$("#show_menu3").click(function () {
      $( ".list_container1" ).hide(3000);
    }); 
	$("#show_menu4").click(function () {
      $( ".list_container1" ).hide(3000);
    }); 
	$("#show_menu5").click(function () {
      $( ".list_container1" ).hide(3000);
    }); 
	$("#show_menu6").click(function () {
      $( ".list_container1" ).hide(3000);
    }); 
  });
  
  
  $(document).ready(function() {
    $("#show_menu2").click(function () {
      $( ".list_container2" ).show(3000);
    });  
    $("#show_menu1").click(function () {
      $( ".list_container2" ).hide(3000);
    }); 
	$("#show_menu3").click(function () {
      $( ".list_container2" ).hide(3000);
    }); 
	$("#show_menu4").click(function () {
      $( ".list_container2" ).hide(3000);
    }); 
	$("#show_menu5").click(function () {
      $( ".list_container2" ).hide(3000);
    }); 
	$("#show_menu6").click(function () {
      $( ".list_container2" ).hide(3000);
    }); 
  });
  
  $(document).ready(function() {
    $("#show_menu3").click(function () {
      $( ".list_container3" ).show(3000);
    });  
    $("#show_menu2").click(function () {
      $( ".list_container3" ).hide(3000);
    }); 
	$("#show_menu1").click(function () {
      $( ".list_container3" ).hide(3000);
    }); 
	$("#show_menu4").click(function () {
      $( ".list_container3" ).hide(3000);
    }); 
	$("#show_menu5").click(function () {
      $( ".list_container3" ).hide(3000);
    }); 
	$("#show_menu6").click(function () {
      $( ".list_container3" ).hide(3000);
    }); 
  });
  
  $(document).ready(function() {
    $("#show_menu4").click(function () {
      $( ".list_container4" ).show(3000);
    });  
    $("#show_menu2").click(function () {
      $( ".list_container4" ).hide(3000);
    }); 
	$("#show_menu3").click(function () {
      $( ".list_container4" ).hide(3000);
    }); 
	$("#show_menu1").click(function () {
      $( ".list_container4" ).hide(3000);
    }); 
	$("#show_menu5").click(function () {
      $( ".list_container4" ).hide(3000);
    }); 
	$("#show_menu6").click(function () {
      $( ".list_container4" ).hide(3000);
    }); 
  });
  
  $(document).ready(function() {
    $("#show_menu5").click(function () {
      $( ".list_container5" ).show(3000);
    });  
    $("#show_menu2").click(function () {
      $( ".list_container5" ).hide(3000);
    }); 
	$("#show_menu3").click(function () {
      $( ".list_container5" ).hide(3000);
    }); 
	$("#show_menu4").click(function () {
      $( ".list_container5" ).hide(3000);
    }); 
	$("#show_menu1").click(function () {
      $( ".list_container5" ).hide(3000);
    }); 
	$("#show_menu6").click(function () {
      $( ".list_container5" ).hide(3000);
    }); 
  });
  
  $(document).ready(function() {
    $("#show_menu6").click(function () {
      $( ".list_container6" ).show(3000);
    });  
    $("#show_menu2").click(function () {
      $( ".list_container6" ).hide(3000);
    }); 
	$("#show_menu3").click(function () {
      $( ".list_container6" ).hide(3000);
    }); 
	$("#show_menu4").click(function () {
      $( ".list_container6" ).hide(3000);
    }); 
	$("#show_menu5").click(function () {
      $( ".list_container6" ).hide(3000);
    }); 
	$("#show_menu1").click(function () {
      $( ".list_container6" ).hide(3000);
    }); 
  });
</script>

</head>

<body style="background-image:url('<?php echo base_url( 'assets/img/gm.jpg'); ?>'); background-position: relative;
  background-repeat: no-repeat;
  background-size: cover;" width="100%">

<div class="container register-form user-home"><br><br><br>

<!-- MAIN REGISTRATION -->
  
    <div class="container">

      <!-- Skills -->
	  <div class="grid cs-style-3">
	  <h3>REGISTER FOR GAME EVENTS</h3>
      <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid1">
	  <a href="<?php echo site_url('pubg_home_controller/home'); ?>" class="">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/pubg.jpg" alt="Couture">
            </div>
            <figcaption>
              <h3>REGISTER</h3>
            </figcaption>
          </figure>
		  </a>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid2">
		<a href="<?php echo site_url('cricket_home_controller/home'); ?>" class="">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/cricket.jpg" alt="Couture">
            </div>
            <figcaption>
              <h3>REGISTER</h3>
            </figcaption>
          </figure>
		  </a>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid3">
		<a href="<?php echo site_url('ludo_home_controller/home'); ?>" class="">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/LUDO.jpeg" alt="Couture">
            </div>
            <figcaption>
              <h3>REGISTER</h3>
            </figcaption>
          </figure>
		  </a>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid4">
		<a href="<?php echo site_url('badminton_home_controller/home'); ?>" class="">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/badminton.jpg" alt="Couture">
            </div>
            <figcaption>
              <h3>REGISTER</h3>
            </figcaption>
          </figure>
		  </a>
        </div>
</div>
      <!-- //Skills -->

      

    </div>
 
  <!-- //MAIN REGISTRATION -->


</div>

<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>