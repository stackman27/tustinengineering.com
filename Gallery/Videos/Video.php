<!DOCTYPE html>
<html>
<head>
<title> Videos</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Video.css">
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


<div class = "VideoList">

 <div class = "videoSection1" id = "intro" >
 <h2> T-Tech Intro </h2>
        <iframe width="350" height="245" src="https://www.youtube.com/embed/9dh8DbqgmZY" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

<iframe width="350" height="245" src="http://player.vimeo.com/video/190758656?api=1;title=0&amp;byline=0&amp;portrait=0&amp;color=d01e2f&amp;autoplay=0" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>



	 </div>

	  <div class = "videoSection1" id = "projects" >
 <h2> T-Tech Student Projects </h2>
        <iframe width="350" height="245" src="http://player.vimeo.com/video/164267745?api=1;title=0&amp;byline=0&amp;portrait=0&amp;color=d01e2f&amp;autoplay=0"" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

<iframe width="350" height="245" src="https://www.youtube.com/embed/1FSWf8vG0kI" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

<iframe width="350" height="245" src="https://www.youtube.com/embed/j-eNq1GZkQM" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

<iframe width="350" height="245" src="https://www.youtube.com/embed/4zE6duwytEY" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

	 </div>

	 	  <div class = "videoSection1" >
 <h2> T-Tech UC Irvine Engery Invitational</h2>

<iframe width="350" height="245" src="https://www.youtube.com/embed/ikTmsFRajKg" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

<iframe width="350" height="245" src="https://www.youtube.com/embed/WA7PB3cL1bA" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>

<iframe width="350" height="245" src="http://player.vimeo.com/video/167793171?api=1;title=0&amp;byline=0&amp;portrait=0&amp;color=d01e2f&amp;autoplay=0"" frameborder=0 allowfullscreen  = "allowfullscreen">
</iframe>


	 </div>


</div>





   <div style ="height: 8px;">
   </div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "TTech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p> Videos</p>
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
