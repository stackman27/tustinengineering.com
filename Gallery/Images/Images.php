 <!DOCTYPE html>
<html>
<head>
<title> Images</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "images.css">
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
 /*********************************/
 <!-- Mobile Menu  -->
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
<!-- Nav Menu End  -->

    <div class = "Imgsections">
       <section>
	             <div class = "Img">
                         <a href = "ImgSections/Sec1/Section.html"> <img src = "img/ttech.png" style = "  width: 100%; height: 100%;"/>  </a>
						 <h2  > T - Tech </h2>
				 </div>

				  <div class = "Img">
                         <a href = "ImgSections/Sec3/Section3.html"> <img src = "img/uci.jpg" style = "width: 100%; height: 100%;"/>  </a>
						 <h2> UCI Energy Invitational </h2>
				 </div>

				  <!-- ******************************************************
				                TO BE ADDED
				  *********************************************************

				   <div class = "Img">
                         <a href = "ImgSections/Sec2/Section2.html"> <img src = "img/boeing.png" style = "width: 100%; height: 100%;"/>  </a>
						 <h2> BOEING Internship </h2>
				 </div>



				  <div class = "Img">
                         <a href = "ImgSections/Sec4/Section4.html"> <img src = "img/hardware.jpg" style = "width: 100%; height: 100%;"/>  </a>
						 <h2> Hardware Pathways </h2>
				 </div>

				 <div class = "Img">
                         <a href = "ImgSections/Sec5/Section5.html"> <img src = "img/software.jpg" style = "width: 100%; height: 100%;"/>  </a>
						 <h2> Software Pathways</h2>
				 </div>

				  <div class = "Img">
                         <a href = "ImgSections/Sec6/Section6.html"> <img src = "img/student.jpg" style = "width: 100%; height: 100%;"/>  </a>
						 <h2> Student Projects </h2>
				 </div>  -->

	   </section>
    </div>



  <div style ="height: 8px;">
   </div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "TTech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p> Images</p>
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
