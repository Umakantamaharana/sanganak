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
.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
}
input[type="radio"]:checked ~ .reveal-if-active,
input[type="checkbox"]:checked ~ .reveal-if-active {
  opacity: 1;
  max-height: 100px; /* little bit of a magic number :( */
  overflow: visible;
}
.reveal-if-active {
  opacity: 0;
  max-height: 0;
  overflow: hidden;
  transform: scale(0.8);
  transition: 0.5s;
  input[type="radio"]:checked ~ &,
  input[type="checkbox"]:checked ~ & {
    opacity: 1;
    max-height: 100px;
    overflow: visible;
    padding: 10px 20px;
    transform: scale(1);
  }
}
</style>



</head>

<body>

<div id="tour" class="bg-1 image_home" style="background-image:url('<?php echo base_url( 'assets/images/ludo-bg.jpg'); ?>');" width="100%" height="700px">
  <div class="container">
    <h3 class="text-center">REGISTRATION</h3>
   
             <form action="" method="post">
                <div class="form-content">
				
				<div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="transaction_no" placeholder="Transaction_Id (Example:-907919133867)" required="" value="<?php echo !empty($user['transaction_no'])?$user['transaction_no']:''; ?>">
                                <?php echo form_error('transaction_no','<span class="help-block">','</span>'); ?>
                             </div>
                        
						<div class="form-group">
                                <input type="text" class="form-control" name="college_name" placeholder="college_name" required="" value="<?php echo !empty($user['college_name'])?$user['college_name']:''; ?>"> 
								
								
								
								
								<?php echo form_error('college_name','<span class="help-block">','</span>'); ?>
                            </div>
						
						</div>
						
						<div class="col-md-6">
                            
                            <div class="form-group">
                               <input type="text" class="form-control" name="department" placeholder="department" required="" value="<?php echo !empty($user['department'])?$user['department']:''; ?>" list="department"> 
								
								
								
							<datalist id="department">
							  <option>BTech</option>
							  <option>BSc</option>
							  <option>MCA</option>
							  <option>MSc</option>
							  <option>M-TECH</option>
							  
							</datalist>
								
								<?php echo form_error('department','<span class="help-block">','</span>'); ?>
                            </div>
                              
							 <div class="form-group">
                                <select name="year" class="form-control" placeholder="Year" required="">
								<option  value="">Select Year</option>
								<option>First Year</option>
								<option>Second Year</option>
								<option>Third Year</option>
								<option>Fourth Year</option>
								<option>Fifth Year</option>
								</select>
								<?php echo form_error('year','<span class="help-block">','</span>'); ?>
                            </div> 
 
                            </div>
						
						
                    </div>

				
				
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your_Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>"> 
								<?php echo form_error('name','<span class="help-block">','</span>'); ?>
                            </div>
							
							
                            
                        </div>
						
                        <div class="col-md-6">
                           
							
							<div class="form-group">
                               <input type="email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                              <?php echo form_error('email','<span class="help-block">','</span>'); ?>
 
                            </div>
                            
                        </div>
                        </div>
                      
						
					
					<div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="phone" placeholder="Phone_Number" required="" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                                <?php echo form_error('phone','<span class="help-block">','</span>'); ?>
                             </div>
                        </div>
                    </div>

					     
					
					
				   
				  <div class="form-group">
                  <input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
				  </div>
              </div>   
               
			</form>
			<!--	 <p class="footInfo" style="color:#FFF">Already have Registered? <a href="<?php echo site_url('Ludo_registration_controller/register_done'); ?>"style="color:red;"><button>Click here</button></a> -->
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