<!DOCTYPE html>
<html lang="en">
<head>

</head>
<!-- //Head -->

<!-- Body -->
<body>


    <!-- Navigation -->
    <button style="position: fixed; background:white; top:0px; width:100px;left:50%; transform:translateX(-50%); z-index:10000; border-radius: 0 0 10px 10px; " onclick="history.back()">BACK</button>
	 <section class="cd-section" style="float: left; background:currentColor; box-shadow:0px 0px 40px black;">
		 <div style="float: left;"><img src="<?php echo base_url(); ?>/assets/img/logo_all_opt.png"/></div>
	 </section>

    <section class="cd-section">
      <div style="float: right; margin-top: 11px;"><a class="cd-bouncy-nav-trigger" href="#0" >MENU</a></div>
    </section>

    <div class="cd-bouncy-nav-modal">
      <nav>
        <ul class="cd-bouncy-nav">
          <li><a class="scroll" href="<?php echo base_url();?>">HOME</a></li>
          <li><a class="scroll" href="<?php echo site_url('welcome/about');?>">ABOUT</a></li>
          <li><a class="scroll" href="<?php echo site_url('welcome/committee');?>">COMMITTE</a></li>
          <li><a class="scroll" href="<?php echo site_url('register_controller/register');?>">REGISTER</a></li>
          <li><a class="scroll" href="<?php echo site_url('login_controller/login');?>">LOGIN</a></li>
          <li><a class="scroll" href="<?php echo site_url('welcome/contact');?>">CONTACT</a></li>
        </ul>
      </nav>
      <a href="#0" class="cd-close">Close modal</a>
    </div>
    <!-- //Navigation -->
	
	
	

</body>
</html>