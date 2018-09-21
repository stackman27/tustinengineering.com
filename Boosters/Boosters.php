 <!DOCTYPE html>
<html>
<head>
<title> Boosters </title>
<meta charset = "UTF -8" />
<link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
<link rel = "stylesheet" href = "Boosters.css">
<link rel = "stylesheet" href = "css/footer.css">
<link rel = "stylesheet" href = "css/BoosterUpdate.css">


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




<div style = "margin-top: 65px"> </div>



<div class = "BoosterInfo" >
<div class = "PicInfo">
  <img src  = "Images/BoostersImg.jpg"  alt = "Boosters Img" />
  <p> Parents of all T-Tech students are invited to take part in the T-Tech Boosters. As with other traditional parent groups, the goal of the T-Tech boosters is to support our students and staff with activity logistics, supervision and fund raising. </p>
</div>

 <div class = "DescInfo">
     <p> Although T-Tech is partially funded by TUSD and the Ca. Dept of Ed. , we still need your help. </p>
     <p> Some of the continuing expenses for T-Tech throughout the year include: </p>
     <p style = "line-height: 30px;"> &#9679;  &nbsp; Senior Projects </br> &#9679;  &nbsp; T-Tech Team Apparel </br> &#9679; &nbsp; End of the year banquet  </br> &#9679; &nbsp; Student travel & logistics </br> &#9679; &nbsp; UC Irvine Energy Invitational </br> &#9679; &nbsp; Engineering shop tools and supplies </br> &#9679; &nbsp; College Scholarships and Program Awards </p>
     </br>
	 </br>
	 <p> Booster meetings are held every other month on campus, usually on a weekday night. Our T-Tech
Booster president will send out an email at the beginning of the year but feel free to email us for more
information. </p>
 </div>



 <div style = "clear: both; width: 80%;margin-left: auto; margin-right: auto;border-bottom: 1px solid lightgray;"></div>

 <div class ="ParentVolunteer">
    <p> <span style = "font-size: 19px;"> <b>  Parent Volunteers:   </b>  </span> &nbsp; Are you handy with tools or electronics? Are you a maker? We need your help mentoring and supervising our students on Saturdays and after school while they build their projects as well as getting out engineering shop in order. </p>
 </div>

<div class = "ParentBoosterMeeting">
  <p> <span style = "font-size: 19px;"> <b> Parent Booster Meeting: </b> </span> Involved parents have a voice! Please join us - the group meets every other month in the T-Tech shop. </p>
</div>

  <br>

 <div class = "UpcomingMeeting">

	  <div class ="Forms_Info">
 <section>
      <h2>  <span style = "color:gray; font-size: 22px;"> </span> <span style = "margin-left: 10px;">Upcoming Boosters Meeting</span> </h2>
	  <ul>
	  <li>   <p style = "font-size: 16px;text-align:center;"> <b>  Wednesday November 8th. 6:00 pm! <br> T-Tech shop  </b> </p> </li>
</ul>
 </section>
</div>

  <div class = "MeetingInfo">
     <p> <b style = "font-size: 19px;"> Donations </b> </p>
	 <p>A suggested minimum donation of $50 per student is requested, but we will of course accept any and all contributions.
      Donations of $50 or more will receive a T-Tech t-shirt and T-Tech window decal. $100 or more will receive a T-Tech sweatshirt.
       For seniors, a $100 donation gets them a T-Tech shop shirt (hardware) or a Computer Science polo shirt. <br/>
       Paypal payments can be made to:  ttechacademy@gmail.com <br/>
       Checks can be made out to Tustin High School T-Tech Boosters and given to one of our faculty members or sent directly to our treasurer: </p>
   <span style = "text-align: center"> <p> Krista Andreae <br> 1672 Cameo Dr <br> Santa Ana, CA 92705 </p>  </span>

  </div>


  </div>

  <div style = "clear: both; width: 80%;margin-left: auto; margin-right: auto;border-bottom: 1px solid lightgray;"></div>

  <div class = "booster_Officer">
    <p > 2017 Booster Officers</p>
	<section>
  <p> Booster President </br> Jim Andrea </p>
 <p> Vice Presidents   </br> Al Rossano & Terri Clement</p>
  <p> Treasurer </br> Krista Andreae </p>
  <p> Secretary </br>Tiffany Chatman </p>
 </section>
  </div>
 </div>




 <div style ="height: 5px;">
 </div>

   <div class = "credit">
	<div class  = "position">
	<section class = "posSec">
	<img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
   <p>Boosters</p>
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
