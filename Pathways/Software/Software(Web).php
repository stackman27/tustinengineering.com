<!DOCTYPE html>
<html>
<head>
<title>  Software</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Software.css">
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

<body >

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

   <div class =  "SoftMenu">
         <section>
		  <h2>Software </h2>
		  <p> Pathways | Freshman - Senior </p>
		 </section>
    </div>



	 <div class = "classes" >
	    <section>
		    <span onclick = "ITEtxt()"    id = "ITEtxtspan"  > <h2      id = "ITEtxt" > ITE </h2> </span>
			<span  onclick  = "PDEtxt()"  id = "PDEtxtspan" > <h2  id = "PDEtxt" >  PDE </h2> </span>
			<span  onclick  = "CSPtxt()" id = "CSPtxtspan" > <h2   id = "CSPtxt" >  CSP </h2> </span>
			<span onclick = "CSAtxt()"  id = "CSAtxtspan" > <h2     id = "CSAtxt" >  CSA</h2> </span>
		</section>
	   </div>

	<div style = "height: 15px;"></div>

	<div id = "ITE"  class= "SoftwareClass" >

		   <section style = "width: 30%; float: left; margin-left:3%;   margin-top: 7%;" >
		     <img src = "Intro.jpg" alt = "Intro to Technology"  style = "width: 100%; height: 100%;background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

	       <section>
		      <h2> Intro to Engineering. </h2>
			  <p> Introduction to Engineering is a high school-level survey course of engineering
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
introduction to computer science and coding.  </p></section>
	 </div>

	 <div  id = "PDE"  class = "SoftwareClass" >

	      <section style = "width: 30%; float: left; margin-left:3%;   margin-top: 9%;" >
		     <img src = "Product.jpg" alt = "Product Design & Engineering"  style = "width: 100%; height: 100%;background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

	       <section>
		      <h2> Product Design and Engineering.</h2>
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
workplace and college-level engineering curricula. </p> </section>
	 </div>

	 <div  id = "CSP"  class = "SoftwareClass" >


	      <section style = "width: 30%; float: left; margin-left:3%;   margin-top: 7%;" >
		     <img src = "ComputerScience.jpg" alt = "Computer Science Principles"  style = "width: 100%; height: 100%;background-color: rgba(242,242,242,0.5);  box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, .3);	 "/>
		   </section>

	       <section>
		      <h2> Computer Science Principles. </h2>
			  <p> Computer Science Principles (CSP) is a computer science course for high
school students. Students work in teams to develop computational thinking and
problem solving skills. Structured activities progress to openended projects and
problems that build project management, documentation, and communication
skills. Students in the course use several programming languages, Scratch™,
MIT App Inventor, Python and HTML, to foster computational thinking and
creativity and to build excitement about computing. Students also learn about
the impact of computing across all career paths and consider societal issues
raised by computing. The course assumes no prior knowledge of programming.
However, the rigorous content and open-ended problems in CSP can also
engage students who have already been introduced to the field of computer
science.
</p> </section>
	 </div>

	 <div id= "CSA"  class= "SoftwareClass" >
	       <section style = "width: 100%; text-align: center;" >
		      <h2> Computer Science Applications (Capstone). </h2>
			  <p style = "font-size: 26px;"> Coming in 2018 - 2019</p>  </section>
	 </div>


	 <script>
	 // NEVER EVER CHANGE THESE CODES
	 /* ----------------- Fade in and out animation ------------------ */
$("#PDEtxt").click(function() {
 $("#PDE").fadeIn(500);
 $("#ITE").fadeOut(-1500);
  $("#CSP").fadeOut(-1500);
   $("#CSA").fadeOut(-1500);

  $("#PDEtxt").css('color', 'blue');
   $("#PDEtxtspan").css('border-color', 'blue');

     $("#CSPtxt").css('color', 'black');
   $("#CSPtxtspan").css('border-color', 'lightgray');

     $("#CSAtxt").css('color', 'black');
   $("#CSAtxtspan").css('border-color', 'lightgray');

     $("#ITEtxt").css('color', 'black');
   $("#ITEtxtspan").css('border-color', 'lightgray');
});

$("#CSPtxt").click(function() {
 $("#CSP").fadeIn(500);
 $("#ITE").fadeOut(-1500);
  $("#PDE").fadeOut(-1500);
   $("#CSA").fadeOut(-1500);

     $("#CSPtxt").css('color', 'blue');
   $("#CSPtxtspan").css('border-color', 'blue');

     $("#PDEtxt").css('color', 'black');
   $("#PDEtxtspan").css('border-color', 'lightgray');

     $("#CSAtxt").css('color', 'black');
   $("#CSAtxtspan").css('border-color', 'lightgray');

     $("#ITEtxt").css('color', 'black');
   $("#ITEtxtspan").css('border-color', 'lightgray');

});

$("#CSAtxt").click(function() {
 $("#CSA").fadeIn(500);
 $("#ITE").fadeOut(-1500);
  $("#PDE").fadeOut(-1500);
   $("#CSP").fadeOut(-1500);

     $("#CSAtxt").css('color', 'blue');
   $("#CSAtxtspan").css('border-color', 'blue');

     $("#CSPtxt").css('color', 'black');
   $("#CSPtxtspan").css('border-color', 'lightgray');

     $("#PDEtxt").css('color', 'black');
   $("#PDEtxtspan").css('border-color', 'lightgray');

     $("#ITEtxt").css('color', 'black');
   $("#ITEtxtspan").css('border-color', 'lightgray');

});

$("#ITEtxt").click(function() {
 $("#ITE").fadeIn(500);
 $("#CSA").fadeOut(-1500);
  $("#PDE").fadeOut(-1500);
   $("#CSP").fadeOut(-1500);

     $("#ITEtxt").css('color', 'blue');
   $("#ITEtxtspan").css('border-color', 'blue');

     $("#CSPtxt").css('color', 'black');
   $("#CSPtxtspan").css('border-color', 'lightgray');

     $("#CSAtxt").css('color', 'black');
   $("#CSAtxtspan").css('border-color', 'lightgray');

     $("#PDEtxt").css('color', 'black');
   $("#PDEtxtspan").css('border-color', 'lightgray');

});

/*-------------------- Fade in and out animation end --------------- */


	 </script>

	 <script type = "text/javascript">

/*------------------- Color Change animation -------------------
  function  ITEtxt() {
            document.getElementById("ITEtxt").style.color = "blue";
            document.getElementById("CSPtxt").style.color = "black";
            document.getElementById("PDEtxt").style.color = "black";
           	document.getElementById("CSAtxt").style.color = "black";

			document.getElementById("ITEtxtspan").style.border-color = "blue";
			document.getElementById("CSPtxtspan").style.border-color= "lightgray";
			document.getElementById("PDEtxtspan").style.border-color = "lightgray";
			document.getElementById("CSAtxtspan").style.border-color = "lightgray";
	    }

		 function  PDEtxt() {
            document.getElementById("PDEtxt").style.color = "blue";
            document.getElementById("CSPtxt").style.color = "black";
            document.getElementById("ITEtxt").style.color = "black";
           	document.getElementById("CSAtxt").style.color = "black";

			document.getElementById("PDEtxtspan").style.border-color = "blue";
			document.getElementById("CSPtxtspan").style.border-color= "lightgray";
			document.getElementById("ITEtxtspan").style.border-color = "lightgray";
			document.getElementById("CSAtxtspan").style.border-color = "lightgray";
	    }
/*------------------- Color change animation end ------------------*/
	  </script>



<div style = "height: 25px;">
</div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "TTech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p> Software</p>
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
