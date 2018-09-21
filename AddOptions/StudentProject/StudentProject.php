<!DOCTYPE html>
<html>
<head>
<title>Student Projects</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "StudentProject.css">
<link rel = "stylesheet" href = "Accordion.css">
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


<body >

 <!-- Nav Menu Begin
 /********************************* -->
<header class = "Mob_logo" >
  <a href = "../../Homepage.php"> <img src = "Logos/Tustin.png" alt = "logo"    style = "margin-top: 5px;"/> </a>
</header>
<a href="#" class="nav-button" style = "background: white;">Menu</a>

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

<div style = "margin-top: 65px"> </div>

<div class = "stdProj">



		   <div id = "Other"  >
		   <section>

		   		       <div class = "btn">
			   <h2> Prosthetic arm for Nick Caiozzo </h2>
                       <img src = "Images/ProsArm.jpg" alt = "html"  style = "max-width:100%;max-height:100%;"/>
					   <p> By: Derek Weaver, Angelica Verde, Eric Baker and Brandon Rossano .  </p>
					   <p class = "link" > <a href = "http://www.ocregister.com/articles/nick-713648-arm-prosthetic.html"> OC Register </a> <a href = "#"> Images </a> <a href = "../../Gallery/Videos/Video.html#projects"> Video </a> </p>
                    <button class="accordion">Project Information</button>
<div class="panel">
  <p style = "font-size: 17px;">T-Tech students Derek Weaver, Angelica Verde, Eric Baker and Brandon Rossano build a mechanical arm under the direction of teacher Ed Hernandez. The mechanical arm provides Nick an oppourtunity to practice operation a prosthetic limb before he becomes a less flexible adult. Nick's desire to play tennis is well enhanced with the prosthetic arm as he is now able to toss the ball with his left hand and swing with his right hand.  <a href = "http://www.ocregister.com/articles/nick-713648-arm-prosthetic.html"> Learn More.. </a> </p>
</div>
   </div>

				  <div class = "btn">
				    <h2> 64x16 RED LED Marquee  </h2>
                       <img src = "Images/ProjMarquee.jpg" alt = "html"   style = "max-width:100%;max-height:100%;"/>
					    <p> By: Sasha, Amanda, Samantha Landis  </p>
						<p class = "link" > <a href = "#"> Images </a> <a href = "../../Gallery/Videos/Video.html#projects"> Video </a> </p>
                   <button class="accordion">Project Information</button>
<div class="panel">
  <p style = "font-size: 16px;">RED LED Marquee  presents information in a convenient, efficient and  technologically advanced manner. LED Marquee use its compact size  and limited scrolling feature and easy to read type. It makes presenting a message simple and quick. 64x16 RED LED Marquee uses small LED panel  a box of Arduino supplies  and a Solid Work sketch. With a help of 9V battery there is no need for any method AC power. A  usable library of code is used to function the Matrix.   <a href ="http://www.instructables.com/id/64x16-RED-LED-Marquee"> Learn More... </a> </p>
 </div>
 </div>

      <div class = "btn">
			<h2>   The Electric Cargo Tricycle   </h2>
                       <img src = "Images/TriCycle.jpg" alt = "html"  style = "max-width:100%;max-height:100%;"/>
					   <p> By: Mannah Binder, Daniel Espiritu and Ashley Romero.  </p>
					   <p class = "link" > <a href = "#"> Images </a> <a href = "../../Gallery/Videos/Video.html#projects"> Video </a> </p>
                    <button class="accordion">Project Information</button>
    <div class="panel">
  <p style = "font-size: 17px;">The Electric Cargo Tricycle is an efficient and reliable way of transportation between local areas without the use of a car.  Electric Cargo Tricycle combines  the efficicency of a car  with a standard bicycle. The project bulids with an addition of  largo cargo basket  which can be used to carry groceries, other goods, and possibly small children on a bicycle with ease. The entire frame and basket is modeled in SolidWorks and 3D printed a small scale model.  <a href = "http://www.instructables.com/id/T-Tech-Electric-Cargo-Tricycle/"> Learn More.. </a> </p>
   </div>
     </div>


				  <div class = "btn">
				  <h2> Motorized Walker  </h2>
                       <img src = "Images/Motorizedwalker.jpg" alt ="Motorized Walker"  style = "max-width:100%;max-height:100%;"/>
					   <p>   By: Jessica Myles,  Jennifer Gensler, Emily Wendt </p>
		             <p class = "link" > <a href = "#"> Images </a> <a href = "../../Gallery/Videos/Video.html#projects"> Video </a> </p>
                  <button class="accordion">Project Information</button>
<div class="panel">
  <p  style = "font-size: 16px;" > Motorized Walker allows user to walk normally with the assistance of the walker for balance, like an average walker. Or, the user can decide to step onto a foldout platform and be propelled forward at various speeds. This features allows the user to vary their amount of physical involvement and grants them greater  mobility. Each parts is modeled and printed using 3D SolidWorks. The Motorized Walker  is comprised of a normal 4 leg walker modified with the addition of a motor  and single wheel access system from an electric scooter. The Motorized Walker runs on two 12V lead acid batteries  wired in series creating  24 volt electrical system. <a href = "http://www.instructables.com/id/Motorized-Walker/"> Learn More...</a>  </p>
 </div>

		          </div>


</section>
</div>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>
</div>


 <div style ="height: 5px;">
   </div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p>Student Projects</p>
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