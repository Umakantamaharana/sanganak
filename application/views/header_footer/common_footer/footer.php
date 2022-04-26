<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/header.css'); ?>"/>
</head>
<body>

<!-- Footer -->
  <div class="footer">
    <div class="container">

      
      <div class="footer-grids">

        <div class="col-md-4 col-sm-4 footer-grid footer-grid-1 address">
          <h4>Address</h4>
          <address>
            <ul>
              <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> UTKAL UNIVERSITY </li>
              <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> VANI VIHAR </li>
              <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> BHUBANESWAR </li>
			  <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> 751004 </li>
            </ul>
          </address>
        </div>

        

        <div class="col-md-4 col-sm-4 footer-grid footer-grid-3 email">
          <h4>Contact</h4>
          <p><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> <a href="#"> +91-7538038239</a></p>
          <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> <a href="mailto:sanganak.uu@gmail.com"> sanganak.uu@gmail.com</a></p>
        </div>

        <div class="clearfix"></div>
        
      </div>

      <!-- Copyright -->
      <div class="copyright">
        <p>&copy; 2022 Sanganak Techfest. All Rights Reserved |  <a href="<?php echo site_url('welcome/committee');?>" target="_blank"> Team Sanganak </a></p>
      </div>
      <!-- //Copyright -->

    </div>
  </div>
  <!-- //Footer -->
  
  
  

  <!-- Custom-JavaScript-File-Links -->

    <!-- Default-JavaScript -->   <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
    <!-- Bootstrap-JavaScript --> <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>

    <!-- Slider-JavaScript-Files -->
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.easing.1.3.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.mobile.customized.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/camera.js"></script>
      <script>
        jQuery(function(){
          jQuery('#camera_wrap_2').camera({
            loader: 'bar',
            speed: 1000,
            pagination: false,
            thumbnails: false,
          });
        });
      </script>
    <!-- //Slider-JavaScript-Files -->

    <!-- Navigation-JavaScript -->
      <script src="<?php echo base_url(); ?>/assets/js/nav.js"></script>
    <!-- //Navigation-JavaScript -->

    <!-- Progressive-Effects-Animation-JavaScript -->
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.inview.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/mousescroll.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/main.js"></script>
    <!-- //Progressive-Effects-Animation-JavaScript -->

    <!-- Stats-Number-Scroller-Animation-JavaScript -->
      <script src="<?php echo base_url(); ?>/assets/js/waypoints.min.js"></script> 
      <script src="<?php echo base_url(); ?>/assets/js/counterup.min.js"></script> 
      <script>
        jQuery(document).ready(function( $ ) {
          $('.counter').counterUp({
            delay: 10,
            time: 1000
          });
        });
      </script>
    <!-- //Stats-Number-Scroller-Animation-JavaScript -->

    <!-- Gallery-Tab-JavaScript -->
      <script src="<?php echo base_url(); ?>/assets/js/cbpFWTabs.js"></script>
      <script>
        (function() {
          [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
            new CBPFWTabs( el );
          });
        })();
      </script>
    <!-- //Gallery-Tab-JavaScript -->

    <!-- Swipe-Box-JavaScript -->
      <script src="<?php echo base_url(); ?>/assets/js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
          jQuery(function($) {
            $(".swipebox").swipebox();
          });
      </script>
    <!-- //Swipe-Box-JavaScript -->

   

    <!-- Smooth-Scrolling-JavaScript -->
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/move-top.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/easing.js"></script>
      <script type="text/javascript">
          jQuery(document).ready(function($) {
            $(".scroll, .navbar li a, .footer li a").click(function(event){
              $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
          });
      </script>
    <!-- //Smooth-Scrolling-JavaScript -->

  <!-- //Custom-JavaScript-File-Links -->

  

</body>

</html>