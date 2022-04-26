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

<body style="background-image:url('<?php echo base_url( 'assets/images/coverphoto.jpg'); ?>'); background-position: relative;
  background-repeat: no-repeat;
  background-size: cover;" width="100%">

<div class="container register-form user-home"><br><br><br>
<div class="row">
<br><br>

<div class="col-sm-6" style="background-color:;">
   <button class="btn btn-primary" id="show_menu1">Click Here Register for C-Coding</button>  
   <br><br>
   <button class="btn btn-primary" id="show_menu2">Click Here Register for Paper Presentation</button>
   <br><br>
   <button class="btn btn-primary" id="show_menu3">Click Here Register for Quants & Reasoning (MCQ)</button>
   <br><br>   
   <button class="btn btn-primary" id="show_menu4">Click Here Register for General Quiz</button>
   <br><br>   
   <button class="btn btn-primary" id="show_menu5">Click Here Register for Technical Quiz</button>
   <br><br>   
   <button class="btn btn-primary" id="show_menu6">Click Here Register for Group Discussion</button>                        
						
</div><br><br>

<div class="list_container1 col-md-6" style="display:none">
            <div class="form">
                <div class="note">
                    <p>Register For C-Coding.</p>
                </div>

                <form action="" method="post">
                <div class="form-content">
                    
                   
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required="" readonly value="<?php foreach($uservalue as $user){
	                              echo $user['name'];
	                            }?>">
                            </div>
                            <div class="form-group">
							<label class="heading">Event Name:</label>
							<input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required="" readonly value="C-Coding">
                                <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                             </div>
                                             
                   <div class="form-group">
                    <input type="submit" name="Submit1" class="btn-primary" value="Submit"/>
                  </div>
               </div> 
			</form>
			</div>	 
            </div>
			
			
<div class="list_container2 col-md-6" style="display:none">
            <div class="form">
                <div class="note">
                    <p>Register For Paper Presentation.</p>
                </div>

                <form action="" method="post">
                <div class="form-content">
                    
                   
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required="" readonly value="<?php foreach($uservalue as $user){
	                              echo $user['name'];
	                            }?>">
                            </div>
                            <div class="form-group">
							<label class="heading">Event Name:</label>
							<input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required="" readonly value="Paper Presentation">
                                <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                             </div>
                                             
                   <div class="form-group">
                    <input type="submit" name="Submit2" class="btn-primary" value="Submit"/>
                  </div>
               </div> 
			</form>
			</div>	 
            </div>
			
			
<div class="list_container3 col-md-6" style="display:none">
            <div class="form">
                <div class="note">
                    <p>Register For Quants & Reasoning (MCQ).</p>
                </div>

                <form action="" method="post">
                <div class="form-content">
                    
                   
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required="" readonly value="<?php foreach($uservalue as $user){
	                              echo $user['name'];
	                            }?>">
                            </div>
                            <div class="form-group">
							<label class="heading">Event Name:</label>
							<input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required="" readonly value="Quants & Reasoning (MCQ)">
                                <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                             </div>
                                             
                   <div class="form-group">
                    <input type="submit" name="Submit3" class="btn-primary" value="Submit"/>
                  </div>
               </div> 
			</form>
			</div>	 
            </div>
			
			

			
			
<div class="list_container4 col-md-6" style="display:none">
            <div class="form">
                <div class="note">
                    <p>Register For General Quiz.</p>
                </div>

                <form action="" method="post">
                <div class="form-content">
                    
                   
                            <div class="form-group">
                                <input type="text" class="form-control" name="name1" placeholder="First Participant's Name" required="" readonly value="<?php foreach($uservalue as $user){
	                              echo $user['name'];
	                            } ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name2" placeholder="Second Participant's Name" required="" value="<?php echo !empty($user['name2'])?$user['name2']:''; ?>">
                                <?php echo form_error('name2','<span class="help-block">','</span>'); ?>
                             </div>
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="name3" placeholder="Third Participant's Name" required="" value="<?php echo !empty($user['name3'])?$user['name3']:''; ?>">
								 <?php echo form_error('name3','<span class="help-block">','</span>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name4" placeholder="Fourth Participant's Name" required="" value="<?php echo !empty($user['name4'])?$user['name4']:''; ?>">
                             <?php echo form_error('name4','<span class="help-block">','</span>'); ?>
 
                            </div>
                        
                            <div class="form-group">
                                 <label class="heading">Event Name:</label>
                                <input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required="" readonly value="General Quiz">
                                <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                               <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                            </div>
                           
                     
                   <div class="form-group">
                    <input type="submit" name="Submit4" class="btn-primary" value="Submit"/>
                  </div>
               </div> 
			</form>
			</div>	 
            </div>
			
			
<div class="list_container5 col-md-6" style="display:none">
            <div class="form">
                <div class="note">
                    <p>Register For Technical Quiz.</p>
                </div>

                <form action="" method="post">
                <div class="form-content">
                    
                   
                            <div class="form-group">
                                <input type="text" class="form-control" name="name1" placeholder="First Participant's Name" required="" readonly value="<?php foreach($uservalue as $user){
	                              echo $user['name'];
	                            } ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name2" placeholder="Second Participant's Name" required="" value="<?php echo !empty($user['name2'])?$user['name2']:''; ?>">
                                <?php echo form_error('name2','<span class="help-block">','</span>'); ?>
                             </div>
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="name3" placeholder="Third Participant's Name" required="" value="<?php echo !empty($user['name3'])?$user['name3']:''; ?>">
								 <?php echo form_error('name3','<span class="help-block">','</span>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name4" placeholder="Fourth Participant's Name" required="" value="<?php echo !empty($user['name4'])?$user['name4']:''; ?>">
                             <?php echo form_error('name4','<span class="help-block">','</span>'); ?>
 
                            </div>
                        
                            <div class="form-group">
                                 <label class="heading">Event Name:</label>
                                <input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required="" readonly value="Technical Quiz">
                                <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                               <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                            </div>
                           
                     
                   <div class="form-group">
                    <input type="submit" name="Submit5" class="btn-primary" value="Submit"/>
                  </div>
               </div> 
			</form>
			</div>	 
            </div>
			
			
<div class="list_container6 col-md-6" style="display:none">
            <div class="form">
                <div class="note">
                    <p>Register For Group Discussion.</p>
                </div>

                <form action="" method="post">
                <div class="form-content">
                    
                   
                            <div class="form-group">
                                <input type="text" class="form-control" name="name1" placeholder="First Participant's Name" required="" readonly value="<?php foreach($uservalue as $user){
	                              echo $user['name'];
	                            } ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name2" placeholder="Second Participant's Name" required="" value="<?php echo !empty($user['name2'])?$user['name2']:''; ?>">
                                <?php echo form_error('name2','<span class="help-block">','</span>'); ?>
                             </div>
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="name3" placeholder="Third Participant's Name" required="" value="<?php echo !empty($user['name3'])?$user['name3']:''; ?>">
								 <?php echo form_error('name3','<span class="help-block">','</span>'); ?>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="name4" placeholder="Fourth Participant's Name" required="" value="<?php echo !empty($user['name4'])?$user['name4']:''; ?>">
                             <?php echo form_error('name4','<span class="help-block">','</span>'); ?>
 
                            </div>
                        
                            <div class="form-group">
                                 <label class="heading">Event Name:</label>
                                <input type="text" class="form-control" name="event_name" placeholder="Enter Event Name" required="" readonly value="Group Discussion">
                                <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                               <?php echo form_error('event_name','<span class="help-block">','</span>'); ?>
                            </div>
                           
                     
                   <div class="form-group">
                    <input type="submit" name="Submit6" class="btn-primary" value="Submit"/>
                  </div>
               </div> 
			</form>
			</div>	 
            </div>			
			
			
			
</div>
</div>

<?php $this->load->view('header_footer/common_footer/footer'); ?>
</body>
</html>