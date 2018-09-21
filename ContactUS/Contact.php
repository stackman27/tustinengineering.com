

<!DOCTYPE html>
<html>
<head>
<title> Contact Us</title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "contactUs.css">
<link rel = "stylesheet" href = "css/footer.css">
<link rel = "stylesheet" href = "engContactUs.css">


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


 <div style  ="margin-top: 60px;"> </div>


<div class = "ContactUS">
<!-- Contact html  -->
<div class = "THS_Info">

<div class= "THS_Info_sepe_Img">
	  <a> <img src  = "Logos/THS.jpg"  alt = "Tustin High School"  style = "height: 125px; width: 125px;"/>  </a>
	</div>

 <div class = "THS_Info_sepe">
    <h2 style = "font-family: Calibri light;">  Tustin High School    </h2>
	  <p> 1171 El Camino Real </p>
	   <p> Tustin CA, 92780 </p>
	   <p> (714) -730-7414 </p>
	   <a> http://www.tustin.k12.ca.us/tustinhs </a>
	</div>
	 </br>
	<div class = "Princ_Info">
	<br>
	  <p style = "font-family: Calibri light;" >   Principal:  <br>  Christine Matos  | cmatos@tustin.k12.ca.us </p>
	  <p style = "font-family: Calibri light;" >   Vice Principles   </br> Michele Boudreaux | mboudreaux@tustin.k12.ca.us </br>
    Ali Del Castillo | adelcastillo@tustin.k12.ca.us </br>
     Tim Grave | tgrave@tustin.k12.ca.us
   </p>
	</div>

</div>




 <div class = "location1">
 <div class = "TTech_Info">
 <div class= "TTech_Info_sepe_Img">
	  <a> <img src  = "Logos/TTech.jpg"  alt = "T-Tech"  style = "height: 125px; width: 125px;"/>  </a>
	</div>

		<div class = "TTech_Info_sepe" style = "text-align: center;">
	     <h2>   T-Tech Academy of Technology & Enginnering </h2>
            <p>   Director:  Mr. Ed Hernandez </p>
			<p style = "color: blue;"> ehernandez@tustin.k12.ca.us </p>
             <p> x87526 </p>
         </div>

		  </div>
	</div>

  <div class = "contact1">
 <div class = "ContactInfo">
   <h2> Contact Support.</h2>
    <p> Get in touch with us. Give us your E-mail address and we'll get you updated with latest TTech updates. </p>
     </div>

		 <form action = "Insert.php" method = "POST" class = "question" name = "myForm">
		 <label> &nbsp; </label>
		 <input type = "text" name = "fname" placeholder="Email Address" class = "text_que" required> &nbsp;
		 <input type = "submit" value = "Submit" name = "submit" class = "question_submit">
		 </form>
	</div>
	</div>

<script>
	function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>




<div style = "height: 8px;">
</div>


 <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p>Contact Us</p>
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
