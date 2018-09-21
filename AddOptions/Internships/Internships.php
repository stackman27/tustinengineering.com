<!DOCTYPE html>
<html>
<head>
<title>Internship Opportunities</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Internships.css">
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
        &nbsp; &nbsp;  &nbsp; &nbsp;
	    <img src = "Images/int1.jpg" alt = "Internship Opportunities"  >
		 &nbsp; &nbsp;  &nbsp;
		<img src = "Images/int2.jpg" alt = "Internship Opportunities" >
    &nbsp; &nbsp;  &nbsp;
   <img src = "Images/int3.jpg" alt = "Internship Opportunities" >

	 </div>

	 <div class = "InvenTeams_IA">
		<p> <b>Internship Opportunities</b> </p>
	   <p> Only T-Tech students have the unique opportunity to participate
in a number of summer internship opportunities, offering the
kind of experiences and training unavailable in any classroom
setting. Whether it be at an aerospace firm like Boeing or an
augmented reality developer like Eon Reality, students work side
by side with professionals in technology. They not only gain
valuable work experience, but also an insight into what the “real
working world” is like. Since its inception five years ago, the T-
Tech internship program has placed almost 50 students in
summer technical jobs or internships. </p>

	  <p> Internship positions are available to 11 th and 12 th graders through a
competitive application and interview process. For specific
questions regarding our internship programs, please contact Mr.
Hernandez. </p>


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
