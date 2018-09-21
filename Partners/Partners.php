<!DOCTYPE html>
<html>
<head>
<title> Partners </title>
<meta charset = "UTF -8">
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Partners.css" />
<link rel = "stylesheet" href = "css/footer.css" />

<!-- Header -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

	<link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/defaults.min.css">
    <link rel="stylesheet" href="css/nav-core.min.css">
    <link rel="stylesheet" href="css/nav-layout.min.css">
<!-- Header -->
</head>

<body>
 <!-- Mobile Menu -->
<header class = "Mob_logo" >
 <a href = "../Homepage.php"> <img src = "Logos/Tustin.png" alt = "logo"  style = "margin-top: 5px;"/> </a>
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



        <div class = "AllPartners">
		<section>
		   <div id = "Other" >


  <div class = "btn"  >
                       <img  class = "btnmr"  src = "Logos/UPS.png" alt = "html"    style = "max-width:100%;max-height:100%; width: 40%;height: 130px;"/>
                    <button class="accordion"><a href = "https://www.ups.com/WebTracking/track?loc=en_us"> United Parcel Service </a> </button>

		     </div>

				  <div class = "btn">
                       <img src = "Logos/Boeing.png" alt = "html"   height = "125"style = "max-width:100%;max-height:100%;"/>
                   <button class="accordion"><a href = "http://www.boeing.com/"> Boeing Inc </a> </button>


		          </div>

				    <div class = "btn">
                       <img src = "Logos/eon.png" alt = "html"   height = "125"style = "max-width:100%;max-height:100%;"/>
                   <button class="accordion"><a href = "https://www.eonreality.com/">EON Reality</a> </button>


		          </div>



				  <div class = "btn">
                       <img src = "Logos/VL.png"  alt = "html"  height = "125" style = "max-width:100%;max-height:100%;"/>
                  <button class="accordion"> <a href = "http://vitallinkoc.org/"> Vital Link </a> </button>


		          </div>

				  <div class = "btn">
                       <img src = "Logos/UCI.jpg" alt = "html" height = "125"  style = "max-width:100%;max-height:100%;"/>
                  <button class="accordion"> <a href = "https://uci.edu/"> University of California, Irvine </a> </button>


		          </div>

				  <div class = "btn"  >
                       <img class = "btnmr" src = "Logos/IVC.jpg" alt = "html" height = "125"  style = "max-width:100%;max-height:100%;  height: 120px;"/>
                    <button class="accordion"><a href = "http://www.ivc.edu/Pages/default.aspx"> Irvine Valley College </a> </button>

		     </div>

                   <div class = "btn">
                       <img src = "Logos/TUSD.jpg" alt = "html"   height = "125" style = "max-width:100%;max-height:100%;"/>
                    <button class="accordion"><a href = "http://www.tustin.k12.ca.us/"> Tustin Unified School District </a> </button>
		          </div>


				  <div class = "btn" >
                       <img   src = "Logos/ROP.png" alt = "html"   style = "max-width:100%;max-height:100%; height: 120px;"/>
                   <button class="accordion"> <a href = "http://www.coastlinerop.net/">  Coastline ROP </a> </button>

</div>



			 <div class = "btn"  >
                       <img class = "btnmr"  src = "Logos/DOE.png" alt = "html" height = "125"  style = "max-width:100%;max-height:100%;   width: 45%;height: 150px;"/>
                    <button class="accordion"> <a href = "http://www.ed.gov/"> Orange County Department of Education </a> </button>

		     </div>


			    <div class = "btn" >
                       <img src = "Logos/PLTW.png" alt = "html" height = "125"  style = "max-width:100%;max-height:100%;"/>
                    <button class="accordion"><a href = "https://www.pltw.org/"> Project Lead the Way </a> </button>

		     </div>




</section>
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



  <div style ="height: 5px;">
   </div>


   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p>Partners</p>
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
