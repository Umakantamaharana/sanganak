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
    <h3 class="text-center">PUBG Mobile Rules in SANGANAK-2020</h3>
    
<h5>1.Eligibility:</h5>
	One of the player of every squad must be a student of any recognized University or College.<br>
	He must bring his valid university/college I-card  and other team players must bring  their valid Id proof on the match day.<br>

<h5>2.Registration:</h5>
	The registration process for PUBG Mobile in SANGANAK-2020 is started from 25th JANUARY 2020.<br>
	You should register yourself through online.<br>
	The registration fee per squad is  200/- only.<br>
	Mode of payments are GOOGLE PAY / PHONE PAY and PAYTM . <br>
	Winner prize money is 5000/-rupees.<br>
	Make sure you register on or before 08/02/2020 .<br>
	The Match will be held on 11 th Feb 2020 (Probably at 10 AM). For More Details Please visit Website regularlly .<br>
	The Final Match to be held will be announced soon. For more details
please visit the website regularly.<br>

<h5>3.GAME RULES:</h5>
	Game rules may vary in accordance with the game update or organizers.<br>
	You should follow the basic rules of Pubg tournament  like:<br>
(i)		No Exploiting and No Hacking<br>
(ii)	No Cheating<br>
(iii)	No Profanity and Head Speech<br>
(iv)	No Disruptive And Abusive Behavior<br>
(v)		Any  Harassment<br>
(vi)	No Discrimination and denigration<br>
<br>
<!--<img src="<?php //echo base_url('assets/img/pgt.png');?>" width="100px" height="150px"><br>-->



<h5>4.PENALTIES: </h5> 
	If any Competitor fails to obey the code of conduct / rules then they would have to face some penalties like<br> 
•	Verbal warning <br>
•	Fines or deduction of prize money<br>
•	Forfeiture of match <br>
•	Disqualification<br>
•	Suspension or ban <br>
   Penalties may not always be imposed in a successive manner<br>
	In your team there should be a Squad member who have a valid College/Institution Identity Card. <br>
	Without Identity Card , the squad won’t be allowed.<br>
	Squad have to be present physically  for the match.  <br>
	All the participants must reach to the given location 1HOUR before the stating of the match.<br>
	All participants are required to bring their own ANDROID mobile phones. NO OTHER DEVICES (IOS/EMULATOR)  are allowed for game play.<br>
	At most 4 players are required to play the game. <br>
	Any other Rules will be given at the spot by the volunteer.<br>


<h5>5.PLACEMENT POINTS:</h5>
PLACEMENTS	SCORE
1	10
2	6
3	5
4	4
5	3
6	2
7	1
8	1
9-16	0

KILL POINTS:<br>
 Kill points are awarded to team based on the number of kills the team accumulates during the match. A team will earn one (1) Kill Point per kill.<br>
MATCH POINTS :<br>
A Team’s Match point is the sum of their kill ponts and placement point
Kill point + Placement point  =  match point<br>
For ex:-<br>
A team who accumulates 10 kills and finish the match in the 3rd position will earn 15 match points (kill point(10) + placement point(5)).<br>
TOTAL POINT<br>
A team’s total point is the sum point of all match points accumulated during the set period of time.<br>
TIE BREAKER<br>
In the event that two or more team have same numbr of total point . the following rules shall applied to break the tie.<br>
(i)	    Compare every tied team’s total kill points across all match.<br>
(ii)	Compare every tied team’s best performing match based on match point.<br>
(iii)	Compare every tied team’s best performing match based on kill point.<br>
(iv)	Compare every tied team’s kill point in the most recent match.<br>
(v)	    Compare every tied team’s placements point in the most recent match.<br>
<h5>6.BATTLE INFORMATION :</h5>
  There will be a 5 MATCH series will play where first 4 match will be in 4 different map and the final match will be in the ERANGLE map.
After all the matches played the winner will be decided.<br>


<h5>7.Prize Money:</h5>
	The winner of the finale will be awarded with a sum of Rs.5000/-(Five Thousand Only) and chicken dinner.<br><br>

			 
				 <p class="footInfo text-center" style="color:#FFF">All clear about this? <a class= "btn btn-primary" href="<?php echo site_url('Pubg_home_controller/payment'); ?>"style="color:#FF5733">Go For payment.</a></p>
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