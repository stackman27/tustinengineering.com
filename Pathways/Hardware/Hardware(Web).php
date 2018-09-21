<!DOCTYPE html>
<html>
<head>
<title> Hardware</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Hardware.css">
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

</head>

<body>

<script type = "text/javascript">
 $(document).ready(function () {
	 var hashKey = window.location.hash;
	 var hKeyBorders =hashKey + "txt";
     var hKeyBorSpan =hashKey + "txtspan";

	 $('#ITE').hide();
     $(hashKey).show();

	 $('#ITEtxt').css('color', 'black');
	 $('#ITEtxtspan').css('border-color', 'lightgray');

	 $(hKeyBorders).css('color', 'blue');
	 $(hKeyBorSpan).css('border-color', 'blue');

 });
</script>


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

   <div class =  "HardMenu">
         <section>
		  <h2> Hardware </h2>
		  <p> Pathways  |  Freshman - Senior </p>
		 </section>
    </div>

	<div style = "height:auto; width: 38%; margin-left: auto; margin-right: auto; overflow: hidden; margin-top: 20px;">

	</div>


	 <div class = "classes" >
	    <section>
		    <span onclick = "ITEtxt()"    id = "ITEtxtspan"  > <h2      id = "ITEtxt" > ITE </h2> </span>
			<span  onclick  = "PDEtxt()"  id = "PDEtxtspan" > <h2  id = "PDEtxt" >  PDE </h2> </span>
			<span  onclick  = "POEtxt()" id = "POEtxtspan" > <h2   id = "POEtxt" >  POE </h2> </span>
			<span onclick = "EDDtxt()"  id = "EDDtxtspan" > <h2     id = "EDDtxt" >  EDD</h2> </span>
		</section>
	   </div>

	<div style = "height: 15px;"></div>

	<div id = "ITE"  class= "HardwareClass" >


		   <section style = "width: 30%; float: left; margin-left:3%;   margin-top: 7%;" >
		     <img src = "Intro.jpg" alt = "Intro to Technology"  style = "width: 100%; height: 100%;background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

		   <section>
   		      <h2> Intro to Engineering </h2>
			  <p>Introduction to Engineering is a high school-level survey course of engineering
 and computer science. It is the first course offered as part of Tustin High
School’s T-Tech Engineering & Technology Academy. This STEM course
exposes students to some of the basic concepts that they will encounter in
technical and engineering classes down the line. This class will also give
students the opportunity to develop skills and understanding of course concepts
through activity- and project-based learning. In other words, it will feature many
hands-on projects and activities which will enhance and illustrate each and
every lesson. It will be a challenging yet fun class! The course of study includes
topics in Aerospace, Mechanisms, Alternative Energy Sources & Applications,
Machine Control, Fluid Power, Material Properties, Robotics as well as an
introduction to computer science and coding. </p>
</section>

	 </div>

	 <div  id = "PDE"  class = "HardwareClass" >

	      <section style = "width: 30%; float: left; margin-left:3%;   margin-top: 9%;" >
		     <img src = "Product.jpg" alt = "Product Design & Engineering"  style = "width: 100%;height: 100%;background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

	       <section>
		   <h2> Product Design & Engineering</h2>
			  <p> Product Design & Engineering (PDE) is a UC-approved engineering course
offered as part of Tustin High School’s T-Tech Technology & Engineering
Academy.  As a natural progression from traditional 2D and 3D CAD programs,
PDE offers students the ability to use the same high-level tools used by
industry professionals in engineering and industrial product design.  These
tools include SolidWorks 3D CAD modeling software as well as the latest in
additive and subtractive manufacturing technology with products from
AirWolf 3D, Stratasys Dimension, 3D Systems, Roland, MakerBot, Epilog
Laser, and more.  During the course of the class, students will be able to design
a product and create a physical prototype of that product.  Upon completion of
 the course, each student will also have a finished resume and portfolio of all
their work and will be given the opportunity to take the Certified SolidWorks
Associate (CSWA) exam, an industry-level professional certification.
Passing the CSWA will give students a clear advantage in the technology
workplace and college-level engineering curricula.
</p> </section>
	 </div>

	 <div  id = "POE"  class = "HardwareClass" >

			<section style = "width: 30%; float: left; margin-left:3%;   margin-top: 9%;" >
		     <img src = "Principle.jpg" alt = "Principles of  Engineering"  style = "width: 100%; height: 100%;background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

	       <section>
		          <h2> Principles of Engineering</h2>
			  <p> Principles of Engineering (POE) is a UC-approved high school-level survey
course of engineering and the second course offered as part of Tustin High
School’s T-Tech Technology & Engineering Academy.  This STEM course
exposes students to some of the major concepts that they will encounter in a
postsecondary engineering or engineering technology course of study.  POE
will also give students the opportunity to develop skills and understanding of
course concepts through activity- and project-based learning.  In other words,
it will feature many hands-on projects and activities which will enhance and
illustrate each and every lesson.  It will be a challenging but fun class!
<br>
<br>
 Students will employ engineering and scientific concepts in the solution of
engineering design problems as well as an opportunity to investigate engineering
and high tech careers.  Each student will develop problem-solving skills and
apply their knowledge of research and design to create solutions to various
challenges.   The POE course of study includes topics in Mechanisms, Energy
Sources & Applications, Machine Control, Fluid Power, Statics, Material
Properties & Testing, Statistics, Kinematics, Robotics, and more.
</p>   </section>
	 </div>



	 <div id= "EDD"  class= "HardwareClass" >

	 		<section style = "width: 30%; float: left; margin-left:3%;   margin-top: 5%;" >
		     <img src = "Engineering.jpg" alt = "Engineering Design & Development"  style = "width: 100%; height: 100%; background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

	       <section>
		     <h2>  Engineering Design & Development (Capstone) </h2>
			  <p>Engineering Design & Development (EDD) is a UC-approved senior capstone
engineering course covering the process of technical product development from
beginning to end.  EDD is designed to make use of a student's prior knowledge
in basic engineering principles, 3D modeling, robotics, electronics and other
STEM disciplines. In an effort to prepare students for engineering and technical
careers, emphasis will be placed on research, planning, documentation,
prototyping, building and presentation techniques.  Students will complete a
number of projects throughout the school year culminating with their participation
in a capstone senior group project.  This final project will incorporate skills
learned throughout the student’s career at T-Tech.
 </p> </section>
	 </div>


	 <script>
	 // NEVER EVER CHANGE THESE CODES
	 /* ----------------- Fade in and out animation ------------------ */
$("#PDEtxt").click(function() {
 $("#PDE").fadeIn(500);
 $("#ITE").fadeOut(-1500);
  $("#POE").fadeOut(-1500);
   $("#EDD").fadeOut(-1500);

  $("#PDEtxt").css('color', 'blue');
   $("#PDEtxtspan").css('border-color', 'blue');

     $("#POEtxt").css('color', 'black');
   $("#POEtxtspan").css('border-color', 'lightgray');

     $("#EDDtxt").css('color', 'black');
   $("#EDDtxtspan").css('border-color', 'lightgray');

     $("#ITEtxt").css('color', 'black');
   $("#ITEtxtspan").css('border-color', 'lightgray');
});

$("#POEtxt").click(function() {
 $("#POE").fadeIn(500);
 $("#ITE").fadeOut(-1500);
  $("#PDE").fadeOut(-1500);
   $("#EDD").fadeOut(-1500);

     $("#POEtxt").css('color', 'blue');
   $("#POEtxtspan").css('border-color', 'blue');

     $("#PDEtxt").css('color', 'black');
   $("#PDEtxtspan").css('border-color', 'lightgray');

     $("#EDDtxt").css('color', 'black');
   $("#EDDtxtspan").css('border-color', 'lightgray');

     $("#ITEtxt").css('color', 'black');
   $("#ITEtxtspan").css('border-color', 'lightgray');

});

$("#EDDtxt").click(function() {
 $("#EDD").fadeIn(500);
 $("#ITE").fadeOut(-1500);
  $("#PDE").fadeOut(-1500);
   $("#POE").fadeOut(-1500);

     $("#EDDtxt").css('color', 'blue');
   $("#EDDtxtspan").css('border-color', 'blue');

     $("#POEtxt").css('color', 'black');
   $("#POEtxtspan").css('border-color', 'lightgray');

     $("#PDEtxt").css('color', 'black');
   $("#PDEtxtspan").css('border-color', 'lightgray');

     $("#ITEtxt").css('color', 'black');
   $("#ITEtxtspan").css('border-color', 'lightgray');

});

$("#ITEtxt").click(function() {
 $("#ITE").fadeIn(500);
 $("#EDD").fadeOut(-1500);
  $("#PDE").fadeOut(-1500);
   $("#POE").fadeOut(-1500);

     $("#ITEtxt").css('color', 'blue');
   $("#ITEtxtspan").css('border-color', 'blue');

     $("#POEtxt").css('color', 'black');
   $("#POEtxtspan").css('border-color', 'lightgray');

     $("#EDDtxt").css('color', 'black');
   $("#EDDtxtspan").css('border-color', 'lightgray');

     $("#PDEtxt").css('color', 'black');
   $("#PDEtxtspan").css('border-color', 'lightgray');

});

/*-------------------- Fade in and out animation end --------------- */


	 </script>

	 <script type = "text/javascript">

/*------------------- Color Change animation -------------------
  function  ITEtxt() {
            document.getElementById("ITEtxt").style.color = "blue";
            document.getElementById("POEtxt").style.color = "black";
            document.getElementById("PDEtxt").style.color = "black";
           	document.getElementById("EDDtxt").style.color = "black";

			document.getElementById("ITEtxtspan").style.border-color = "blue";
			document.getElementById("POEtxtspan").style.border-color= "lightgray";
			document.getElementById("PDEtxtspan").style.border-color = "lightgray";
			document.getElementById("EDDtxtspan").style.border-color = "lightgray";
	    }

		 function  PDEtxt() {
            document.getElementById("PDEtxt").style.color = "blue";
            document.getElementById("POEtxt").style.color = "black";
            document.getElementById("ITEtxt").style.color = "black";
           	document.getElementById("EDDtxt").style.color = "black";

			document.getElementById("PDEtxtspan").style.border-color = "blue";
			document.getElementById("POEtxtspan").style.border-color= "lightgray";
			document.getElementById("ITEtxtspan").style.border-color = "lightgray";
			document.getElementById("EDDtxtspan").style.border-color = "lightgray";
	    }
/*------------------- Color change animation end ------------------*/
	  </script>



<div style = "height: 25px;">
</div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "TTech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p> Hardware</p>
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
