<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
<head>

<?php $this->load->view('header_footer/common_header/main_header'); ?>

</head>
<!-- //Head -->



<!-- Body -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">



  <!-- Header -->
  <div class="agileheaderw3ls" id="agilehomewthree">

    <!-- Navigation -->
<?php $this->load->view('header_footer/common_header/header'); ?>
    <!-- //Navigation -->



    <!-- Slider -->
    <div class="w3slideraits">
      <div class="camera_wrap w3layouts agileits camera_magenta_skin" id="camera_wrap_2">
        <div data-src="<?php echo base_url(); ?>/assets/images/slide-1.jpg" class="w3layouts agileits">
          
        </div>
        <div class="w3layouts agileits" data-src="<?php echo base_url(); ?>/assets/images/slide-22.png">
          
        </div>
        <div data-src="<?php echo base_url(); ?>/assets/images/slide-21.jpg" class="w3layouts agileits">
          
        </div>
        <div class="w3layouts agileits" data-src="<?php echo base_url(); ?>/assets/images/slide-24.JPG">
          
        </div>

        <div class="w3layouts agileits" data-src="<?php echo base_url(); ?>/assets/images/coverphoto.jpg">
          
        </div>
        
      </div>
    </div>
    <!-- //Slider -->

  </div>
  <!-- //Header -->



  <!-- About -->
  <div class="agileaboutaitsabout" id="agileaboutaitsabout">
    <div class="agileaboutaits">
      <div class="container">

        <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-info">
          <h1>We love to unite!</h1>
          <P>“SANGANAK” is the annual technical festival of Utkal University organized by Dept. of Computer Science & Applications. It refers to the independent body of students who organize this event along with many other social initiatives and outreach programmes around the year......</P>
          <a style="color:#FFF" href="<?php echo site_url('welcome/about');?>" ><button class="btn btn-primary">READ MORE<span class="glyphicon glyphicon-arrow-right" ></span></button></a>
        </div>

        <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-image"></br>
          <div class="agileaboutaits-image-1">
            <img src="<?php echo base_url(); ?>/assets/images/computer_science.jpg" alt="Couture">
          </div>
          <!--<div class="agileaboutaits-image-2">
            <img src="<?php echo base_url(); ?>/assets/images/about-2.jpg" alt="Couture">-->
        </div>
		</div>
		</br>
		
		<div class="container">
		<h1>Message From President</h1>
		<div class="col-md-4 col-sm-4 agileaboutaits-grid agileaboutaits-image">
          <div class="agileaboutaits-image-1">
            <img src="<?php echo base_url(); ?>/assets/images/hod.JPG" alt="Couture">
          </div>
         </div>
	  

        <div class="col-md-8 col-sm-8 agileaboutaits-grid agileaboutaits-info">
          
          <P>It gives me immense pleasure to welcome all the students of our university as well as other universities to our 3rd State Level Technical Festival, “SANGANAK-2022”. This TechFest is aimed to provide the technically inclined youth an innovative platform, where their talent and expertise would be recognized and rewarded. Besides the technical events, this TechFest also contains a lot more fun and enjoyment for the students. Although “SANGANAK” is a toddler of just a year old, it has shown its potential from its second edition, where a huge number of students had participated and got rewarded handsomely. A lot more events have been added and many modifications have been made in the 3rd edition to meet the current technological trends and interests of the students. I welcome all to come and participate in huge numbers and be a part of this TechFest. I hope and believe “SANGANAK-2022” will be a grand success.</P>
         
        </div>
		</div>
		
         
      </div>
    </div>
 </div>
  <!-- //About -->


  
  <!-- MAIN REGISTRATION -->
  <div class="progressive-effects" id="skills">
    <div class="container">

      <!-- Skills -->
	  <div class="grid cs-style-3">
	  <h3>REGISTRATION OPEN</h3>
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
		<a href="<?php echo site_url('blind_date_home_controller/home'); ?>" class="">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/blind_date.jpg" alt="Couture">
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
  </div>
  <!-- //MAIN REGISTRATION -->
  


  
  <!-- Progressive-Effects -->
  <div class="progressive-effects" id="skills">
    <div class="container">

      <!-- Notices -->
      <div id="about-us" class="parallax">
        <h3>Notices</h3>

        <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          
			<marquee  scrollamount="4" direction="left">
		<!--	<a href="<?php echo base_url('assets/img/pubg_final.pdf')?>" target="new" style="color:red; text-style:none">
			 1. List of all participants who qulified for the final match of PUBG Event .  
			</a><br>
			
			
			<a href="#" target="new" style="color:red; text-style:none">
			 2. All the technical events registration extended up to 3rd April .&nbsp;  
			</a>-->
			
			<a href="<?php echo base_url('assets/uploads/agenda2020.pdf')?>" target="new" style="color:#FFF;font-weight:bold; text-style:none">
			 1. AGENDA OF SANGANAK - 2022 .  
			</a><br>
			
			<a href="<?php //echo base_url('assets/img/event_rule.pdf')?>" target="new" style="color:#FFF;font-weight:bold;  text-style:none">
			 2. Kindly Register for the events on or before of their respective Closing Date. For Event Details go to the registration link to get the information. Else contact the MEMBERS under COMMITTE option for more Information.
			</a><br>
			 

			</marquee>
          
        </div>
      </div>
      <!-- //Notices -->

      <!-- Stats -->
      <div class="stats">
        <h3>Stats</h3>

        <div class="stats-info">
          <div class="col-md-3 col-sm-3 stats-grid stats-grid-1">
            <div class="stats-img">
              <img src="<?php echo base_url(); ?>/assets/images/s1.png" alt="Corsa Racer">
            </div>
            <div class='numscroller counter numscroller-big-bottom' data-slno='1' data-min='0' data-max='7000' data-delay='.5' data-increment=4>700</div>
            <p>PARTICIPANTS IN SANGANAK-2019</p>
          </div>
          <div class="col-md-3 col-sm-3 stats-grid stats-grid-2">
            <div class="stats-img">
              <img src="<?php echo base_url(); ?>/assets/images/s2.png" alt="Corsa Racer">
            </div>
            <div class='numscroller counter numscroller-big-bottom' data-slno='1' data-min='0' data-max='170' data-delay='8' data-increment="1">20</div>
            <p>NUMBER OF EVENTS</p>
          </div>
          <div class="col-md-3 col-sm-3 stats-grid stats-grid-3">
            <div class="stats-img">
              <img src="<?php echo base_url(); ?>/assets/images/s3.png" alt="Corsa Racer">
            </div>
            <div class='numscroller counter numscroller-big-bottom' data-slno='1' data-min='0' data-max='19000' data-delay='.5' data-increment="11">1000</div>
            <p>e-Followers In Social</p>
          </div>
          <div class="col-md-3 col-sm-3 stats-grid stats-grid-4">
            <div class="stats-img">
              <img src="<?php echo base_url(); ?>/assets/images/s4.png" alt="Corsa Racer">
            </div>
            <div class='numscroller counter numscroller-big-bottom' data-slno='1' data-min='0' data-max='169' data-delay='8' data-increment="1">100</div>
            <p>Awards</p>
          </div>
          <div class="clearfix"></div>
        </div>

      </div>
      <!-- //Stats -->

    </div>
  </div>
  <!-- //Progressive-Effects -->



  <!-- Portfolio -->
  <div class="portfolio" id="portfolio">
    <h2 style="padding:2%;">EVENTS</h2>

    <div class="tabs tabs-style-bar">
      <nav>
        <ul>
          <li><a href="#section-bar-1" class="icon icon-box"><span>TECHNICAL EVENTS</span></a></li>
          <li><a href="#section-bar-2" class="icon icon-display"><span>SPORTS & GAMES</span></a></li>
          <li><a href="#section-bar-3" class="icon icon-upload"><span>CULTURAL EVENTS</span></a></li>
          <li><a href="#section-bar-4" class="icon icon-tools"><span>FUN EVENTS</span></a></li>
        </ul>
      </nav>

      <div class="content-wrap">

        <!-- Tab-1 -->
        <section id="section-bar-1" class="agileits w3layouts">
          <h4>TECHNICAL</h4>
          <div class="gallery-grids">
            <div class="col-md-4 col-sm-4 gallery-top">
                  <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('technical_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/BITS_BYTES.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>BIT & BYTES</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
            <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('technical_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/think_quick.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>THINK QUICK</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
            <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('technical_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/BEAT_THE_CLOCK.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>BEAT 'D' CLOCK</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
            <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('technical_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/TURING_TALK.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>TURING TALK</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
            <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('technical_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/gd.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>DEBATE/GD</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- //Tab-1 -->

        <!-- Tab-2 -->
        <section id="section-bar-2" class="agileits w3layouts">
          <h4>SPORTS & GAMES</h4>
          <div class="gallery-grids">
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('Pubg_home_controller/home'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/pubg.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>PUBG</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('Cricket_home_controller/home'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/cricket.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>GULLY CRICKET</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('Ludo_home_controller/home'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/LUDO.jpeg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>LUDO</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- //Tab-2 -->

        <!-- Tab-3 -->
        <section id="section-bar-3" class="agileits w3layouts">
          <h4>CULTURAL</h4>
          <div class="gallery-grids">
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('cultural_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/SINGING.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>SINGING</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('cultural_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/dance.jpg" alt="" class="img-responsive">
                  <figcaption>
                   <h4>DANCING</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('cultural_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/ACTING.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>ACTING</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('cultural_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/fashion.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>FASHION SHOW</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('cultural_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                  <figure class="effect-bubba">
                    <img src="<?php echo base_url(); ?>/assets/images/sketch d theme event pic.jpg" alt="" class="img-responsive">
                    <figcaption>
                      <h4>SKETCH 'D' THEME</br>REGISTER</h4>
                    </figcaption>
                  </figure>
                </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('cultural_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/photography.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>PHOTOGRAPHY</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
           
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- //Tab-3 -->

        <!-- Tab-4 -->
        <section id="section-bar-4" class="agileits w3layouts">
          <h4>FUN</h4>
          <div class="gallery-grids">
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('fun_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/blind_date.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>BLIND DATE</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('fun_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/paper dance 2.gif" alt="" class="img-responsive">
                  <figcaption>
                    <h4>PAPER DANCE</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('fun_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/musicchair.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>MUSIC CHAIR</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('fun_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/damsharas 2.png" alt="" class="img-responsive">
                  <figcaption>
                    <h4>DAMSHARAS</br>REGISTER</h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            <div class="col-md-4 col-sm-4 gallery-top">
              <?php if($this->session->userdata('isUserLoggedIn')){ ?>
              <a href="<?php echo site_url('fun_event_controller/event'); ?>" class="">
                  <?php }
                  else{?>
              <a href="<?php echo site_url('register_controller/register'); ?>" class="">
                <?php } ?>
                <figure class="effect-bubba">
                  <img src="<?php echo base_url(); ?>/assets/images/dj.jpg" alt="" class="img-responsive">
                  <figcaption>
                    <h4>DJ NIGHT</br></h4>
                  </figcaption>
                </figure>
              </a>
            </div>
            
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- //Tab-4 -->
        
      </div><!-- //Content -->
    </div><!-- //Tabs -->
  </div>
  <!-- //Portfolio -->
  
  
  <!-- GALLERY -->
  <div class="w3threespecialityw3ls" id="w3threespecialityw3ls">
    <div class="container">

      <h2>GALLERY</h2>
      <div class="grid cs-style-3">
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid1">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g1.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid2">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g2.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid3">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g3.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid4">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g4.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid5">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g5.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
        <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid6">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g6.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
		<div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid6">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g7.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
		<div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid6">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g8.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
		<div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid6">
          <figure>
            <div class="w3threespecialityw3ls-info">
              <img src="<?php echo base_url(); ?>/assets/images/gallery/g9.JPG" alt="Couture">
            </div>
            <figcaption>
              <h3>SANGANAK</h3>
            </figcaption>
          </figure>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>

    </div>
  </div>
  <!-- //GALLERY -->

  
  
  
<?php $this->load->view('header_footer/common_footer/footer'); ?>


</body>
</html>