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
h5{
	text-align:left;
	font-size:20px;
	padding:1%;
	color:orange;
}
</style>



</head>

<body>

<div class="progressive-effects" id="skills" style="color:#FFF">
  <div class="container">
    <h3 class="text-center">BLIND DATE in SANGANAK-2020</h3>
    
<h5>REGISTRATION PROCESS :</h5>
1.	The participant must have to give an IDENTITY PROOF and registered himself/herself through online for the event.<br>
2.	The last date of registration is 10.02.2020 and the event will held on 13.02.20<br>
3.	Entry fee is 30/- rupees for each participates.<br>
4.	In case of any issue the organizer decision will be the final decision.<br>
<h5>RULES OF THE EVENT :</h5>
1.	This is casual gaming events for COUPLE.<br>
2.	The participants will go through some round of game or events, where the first round will be “RAB NE BANA DI JODI” round. In this round couples are made by their destiny.<br>
3.	After that rest of the round will be played by the participants with their partner made in first round.<br>
4.	Each round will be a “KNOCK OUT” round after the 1st round.<br>
5.	The last stand couple will be decided as the WINNER of the competition and the 2nd last couple will be the RUNNER’S UP.<br>
6.	The participants must also remember to treat other players with respect as well as fun.<br>
7.	During the event all participants are expected to behave professionally and should avoid abusive language/gesture.<br>
8.	There is a SEVERE PENALTY for anyone who curse the opponent. That person will be removed from the whole “SANGANAK” event. NO EXCUSES. <br>
(Cursing is constituted as abusive, hateful, or malignant language or behavior.)<br>
9.	If any player is deemed to be violent, ill-cooperative or Dangerous to anyone around him, he will be removed and possibly a police report will be filed.
<br><br>

			 
				 <p class="footInfo text-center" style="color:#FFF">All clear about this? <a class= "btn btn-primary" href="<?php echo site_url('blind_date_home_controller/payment'); ?>"style="color:#FF5733">Go For payment.</a></p>
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