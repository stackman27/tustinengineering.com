<!DOCTYPE html>
<html>
<head>
<title> Pathways</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Pathways.css">
<link rel = "stylesheet" href = "css/footer.css">


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



</head>

<body>

  <!-- Nav Menu Begin
 /********************************* -->
 <!-- Mobile Menu -->
<header class = "Mob_logo" >
  <a href = "../Homepage.php"> <img src = "Logos/Tustin.png" alt = "logo"   style = "margin-top: 5px;"/> </a>
</header>
<a href="#" class="nav-button" style = "background: white;">Menu</a>
<!-- Mobile Menu End -->

<?php
$back = "../";
include("../fileHolder/headernav.php");
?>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/nav.jquery.min.js"></script>
<script>
    $('.nav').nav();
</script>
<!-- Nav Menu End
/********************************* -->


<div class = "Path_Pic">
  <section>
        <img src = "Logos/Pathways.jpg"/>
  </section>
</div>

<div class = "Path_text">
 <!--<section class = "Path_Title">
    <h2> Tustin High School Academy of Technology and Technology.</h2>
 </section> -->
 <section class = "Path_Desc" >
     <p> Modern society demands a technology proficient workforce.  In order to succeed and flourish in today's job market, a traditional academic plan is no longer enough.  At Tustin High School, T-Tech students have the option to choose two different technology pathways which will help prepare them for their post secondary plans.  It doesn't matter if a student chooses a 4-yr university, community college or trade program, successful completion of either pathway is sure to set a student apart from the rest.
    </br>
	</br>
T-Tech's  "hardware" pathway emphasizes traditional engineering practices and curriculum and includes robotics and hands-on applied physics activities.  Seniors in this tract will work in the T-Tech's state of the art engineering shop to develop a group "senior project".
     </br>
	  </br>
Our "software" pathway includes an introduction to computing principles, App development, Arduino, programming (Python, C++, Java) and more.  Seniors in this tract will work as a group to solve advanced computing problems and applications.
 </p> </section>
 </div>

<div style ="height: 5px;">
   </div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p>Pathways</p>
	</section>
	</div>

  <?php
  $back = "../";
  include("../fileHolder/footernav.php");
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
