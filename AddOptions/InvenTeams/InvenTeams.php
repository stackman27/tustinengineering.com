<!DOCTYPE html>
<html>
<head>
<title>Lemelson MIT InvenTeams</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "InvenTeams.css">
<link rel = "stylesheet" href = "css/footer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- New ***** -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

	<link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/defaults.min.css">
    <link rel="stylesheet" href="css/nav-core.min.css">
    <link rel="stylesheet" href="css/nav-layout.min.css">
<!-- /*********** -->

    <link href="css/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="js/ninja-slider.js" type="text/javascript"></script>
</head>

<body >


 <!-- Nav Menu Begin
 /********************************* -->
 <!-- Mobile Menu -->
<header class = "Mob_logo" >
  <a href = "../../Homepage.php"> <img src = "Logos/Tustin.png" alt = "logo"   style = "margin-top: 5px;"/> </a>
</header>
<a href="#" class="nav-button" style = "background: white;">Menu</a>
<!-- Mobile Menu End -->


<?php
$back = "../../";
include("../../fileHolder/headernav.php");
?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/nav.jquery.min.js"></script>
<script>
    $('.nav').nav();
</script>
<!-- Nav Menu End
/********************************* -->

<div style  ="margin-top: 65px;"> </div>

<div class = "InvenTeamsInfo">

     <div class = "InvenTeamImg">
	    <img src = "Images/LemMit.jpg" alt = " MIT InvenTeams"  >
		 &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;
		<img src = "Images/LemMit1.jpg" alt = "MIT InvenTeams" >
	 </div>

	 <div class = "InvenTeams_IA">
		<p> <b> T-Tech is going to MIT ! </b> </p>
	   <p> A team of eleven T-Tech students was just awarded a $9,000 grant from the <a href = "http://lemelson.mit.edu/teams/inventeam" style = "color: blue;"> Lemelson-MIT InvenTeams </a>  Program.  The funds will be used for the
complete development and fabrication of a student-created invention over the next seven months.  Tustin&#39;s challenge:  to develop a machine to
quickly and efficiently remove unsightly chewing gum from concrete floors, walkways and sidewalks.  Chewing gum litter is the number two litter
problem in the world, second only to cigarette butts. </p>

	  <p> The program will culminate with a trip to EurekaFest in June 2017 at the Massachusetts Institute of Technology in Cambridge, MA to present their
invention.  The Tustin High School InvenTeam, selected after an exhaustive 2-year application process, will be one of only 15 high school
InvenTeams from across the United States to participate in this prestigious event. </p>

 <p> Team members: Melanie Acosta, Hugo Ambriz, Jared Andreae, Eric Baker, Max Christy, Sam Christy, Erin Clement, Maraiah Collarines, Byan
Ho, Angelica Pelcastre, Brandon Rossano and advisor Mr. Ed Hernandez. </p>

 <p>Follow our progress on social media as we develop our machine and prepare for our trip to Boston this coming June.
Help us get to MIT: Our grant does not include funds for travel. Help us get to MIT – visit our GoFundMe page here. </p>

<p>  <a href = "http://lemelson.mit.edu/news/high-school-teams-awarded-lemelson-mit-inventeam%E2%84%A2-grant-invention-projects-0" style = "color: blue;"> Click here for the official press release </a>  from the Lemelson-MIT Program. </p>

 <p> <b> Go Tillers! </b> </p>
	 </div>

</div>


 <div style ="height: 5px;">
   </div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p>Lemelson-MIT InvenTeam</p>
	</section>
	</div>

  <?php
  $back = "../../";
  include("../../fileHolder/footernav.php");
  ?>


</div>

<script>
var acc = document.getElementsByClassName("MobileAccordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>

</body>
</html>
