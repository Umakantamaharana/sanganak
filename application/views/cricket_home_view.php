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
    <h3 class="text-center">GULLY CRICKET in SANGANAK-2020</h3>
    
<h5>Registration Process :</h5>
1.	Entry fee is 100/- Rupees per team with a GREEN VICKY BALL.<br>
2.	Every team can have maximum NINE(9) and must have minimum SEVEN(7) players.<br>
3.	Only up to SEVEN(7) players will be playing during any one game.<br>
4.	Registration of each player is done through online. Last date of registration is 08-02-2020.<br>

<h5>Tournament Rule:</h5>
1.	This is a 30-yard circle match.<br>
2.	All rules are same as a 30-yard circle match.<br>
3.	Every match will be of FIVE (5) overs.<br>
4.	Maximum ONE (1) player can bowl TWO(2) overs and rest players can blow ONE(1) over.<br>
5.	There is NO LEG BY runs OR LBW(leg-before-wicket). Only overthrow by-runs available.<br>
6.	During the tournament all participants are expected to behave professionally & should avoidabusive language/ gestures.<br>
7.	In case of a TIE in a match, where both the team scored are same, then the winner will be decided by a SUPER OVER. If the runs in the SUPER OVER is same then the deciding factor will be a BOWL OUT. <br>
8.	A written list of SEVEN(7) players must be presented at the time of toss.”NO SUBSTITUTION ALLOWED AFTER TOSS” except fielding, which will be based on a valid reason.<br>
9.	At the time of match the ON-FIELD UMPIRE’S decision will be the final decision.<br> 
10.	The participant must also remember to treat other players with respect as well as fun.<br>
11.	There is a SEVERE PENALTYfor anyone who curse the opponent. That person will be removed from the whole tournament. NO EXCUSES. If three players from a single team are removed, then the whole team will be banned. <br>
(Cursing is constituted as abusive, hateful, or malignant language or behavior.)<br>
12.	The TEAM CAPTAIN is responsible for informing all of his team mates about when their team will be playing and on what date. Our responsibility is to tell the captain when his team will be playing.<br>
13.	At no cost,”THE SANGANAK MEMBERS” will be responsible for any injuries happened during the match.<br>
14.	If any player is deemed to beVIOLENT, ILL-COOPERATIVE OR DANGEROUS to anyone around him, he will be removed and possibly a POLICE REPORTwill be filled.<br>

<h5>Tournament schedule:</h5>
LAST DATE OF REGISTRATION - 08.02.2020<br>
DATE OF THE EVENT - 10.02.2020 
<br><br>

			 
				 <p class="footInfo text-center" style="color:#FFF">All clear about this? <a class= "btn btn-primary" href="<?php echo site_url('cricket_home_controller/payment'); ?>"style="color:#FF5733">Go For payment.</a></p>
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