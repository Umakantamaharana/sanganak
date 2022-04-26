<!DOCTYPE html>
<html lang="en">
<head>

</head>
<!-- //Head -->

<!-- Body -->
<body>


    <!-- Navigation -->
	 <section class="cd-section" style="float: left;">
		 <div style="float: left;"><img src="<?php echo base_url(); ?>/assets/img/logo_all_opt.png"/></div>
	 </section>

    <section class="cd-section">
      <div style="float: right;"><a class="cd-bouncy-nav-trigger" href="#0" >MENU</a></div>
    </section>

    <div class="cd-bouncy-nav-modal">
      <nav>
        <ul class="cd-bouncy-nav">
          <li><a class="scroll" href="<?php echo base_url();?>">HOME</a></li>
          <li><a class="scroll" href="<?php echo site_url('welcome/about');?>">ABOUT</a></li>
          <li><a class="scroll" href="<?php echo site_url('welcome/committee');?>">COMMITTE</a></li>
          <li><a class="scroll" href="<?php echo site_url('admin_account_controller/account');?>">Admin PANEL</a></li>
          <li><a class="scroll" href="<?php echo site_url('logout_controller/logout');?>">LOGOUT</a></li>
          <li><a class="scroll" href="<?php echo site_url('welcome/contact');?>">CONTACT</a></li>
        </ul>
      </nav>
      <a href="#0" class="cd-close">Close modal</a>
    </div>
    <!-- //Navigation -->
	
	
	

</body>
</html>