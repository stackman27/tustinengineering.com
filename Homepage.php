<!-- ************* T-Tech (Webton) Homepage BEGIN.  Copyright 2016, Sishir Giri All rights reserved. *****************-->
<!DOCTYPE html>
<html>
<head>
  <title> Tustin Engineering</title>
  <meta charset = "UTF -8">
  <link rel="icon" type="image/gif/png" href="Logos/Tustin.png">

  <!-- *************** Navigation menu and page design CSS  begin **************** -->
  <link rel = "stylesheet" href  = "Homepage.css"/>
  <link rel = "stylesheet" href = "css/searchBox.css" />
  <link rel = "stylesheet" href = "css/Homepage.css" />
  <link rel = "stylesheet" href = "css/TwitterFeed.css" />
  <link rel = "stylesheet" href = "css/footer.css" />
  <!-- *************** Navigation menu and page design CSS end **************** -->

  <!--   Additional CSS ( begin  ***** -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/defaults.min.css">
  <link rel="stylesheet" href="css/nav-core.min.css">
  <link rel="stylesheet" href="css/nav-layout.min.css">
  <!--  Additional CSS end *********** -->

  <!-- ******* link to connect to outside css  and javascript to get the designs and effective functioning  begin *********-->
  <link rel = "stylesheet" href = "http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/responsiveslides.css">
  <link rel="stylesheet" href="css/themes.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="js/responsiveslides.min.js"></script>


  <link href="css/ninja-slider.css" rel="stylesheet" type="text/css" />
  <script src="js/ninja_slider.js" type="text/javascript"></script>

  <!-- ******* link to connect to outside css  and javascript to get the designs and effective functioning  end *********-->

  <!-- ************ Slider script begin ************ -->
  <script>


  // You can also use "$(window).load(function() {"
  $(function () {

    // Slideshow 1
    $("#slider1").responsiveSlides({
      auto: true,
      pager: true,
      nav: true,
      speed: 1200,
      maxwidth: 800,
      namespace: "centered-btns"

      /****************  Additional slider function (Not a big deal to worry about) ***********
      $(".rslides").responsiveSlides({
      auto: true,             // Boolean: Animate automatically, true or false
      speed: 500,            // Integer: Speed of the transition, in milliseconds
      timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
      pager: false,           // Boolean: Show pager, true or false
      nav: false,             // Boolean: Show navigation, true or false
      random: false,          // Boolean: Randomize the order of the slides, true or false
      pause: false,           // Boolean: Pause on hover, true or false
      pauseControls: true,    // Boolean: Pause when hovering controls, true or false
      prevText: "Previous",   // String: Text for the "previous" button
      nextText: "Next",       // String: Text for the "next" button
      maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
      navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
      manualControls: "",     // Selector: Declare custom pager navigation
      namespace: "rslides",   // String: Change the default namespace used
      before: function(){},   // Function: Before callback
      after: function(){}     // Function: After callback
    }); */


  });
});
</script>

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-89453744-1', 'auto');
ga('send', 'pageview');

</script>


</head>

<body >

  <!-- Responsive Header Menu
  /****************************************/ -->

  <!--*************** hidden header just for mobile Nav Menu invisible in desktop layout  BEGIN************-->
  <header>
    <img src = "Logos/TustinSTEM.jpg" alt = "T-Tech_ logo"  style = "margin-top: 20px;" />

    <a href="#" class="nav-button">Menu</a>
  </header>
  <!--*************** hidden header just for mobile Nav Menu invisible in desktop layout  END************-->


  <!-- ***************Navigation menu   Responsive to mobile and desktop  BEGIN************************-->
  <div>
    <nav class = "nav" style = "clear: both;">

      <div class = "TTechTitle" style = "margin: 0; padding: 0;display: block; margin-top: -20px;">
        <h2 class = "tt" >Tustin High School Academy of Technology  and Engineering   </h2>
      </div>

      <ul>

        <li class = "Nav_Logo"> <img src = "Logos/Tustin.png" /> </li> <!-- Displays T-Tech logo -->
        <li style = "width: 10px;"> </li>

        <li > <a href= "#"> Home </a> </li>
        <li class = "nav-submenu"> <a href = "#"> About </a> <!-- To add another menu just copy and paste that code at the laft and change the context to your menu -->
          <ul>
            <li> <a href  = "aboutUS/Intro/Intro.php"> Introduction </a> </li>
            <li> <a href  = "aboutUS/Staff/Staff.php"> Faculty</a> </li>
            <li > <a href = "Partners/Partners.php"> Partners </a></li>
            <li> <a href = "AddOptions/AchievementsHome/Achievement.php"> Awards & Recognitions </a> </li>
            <li> <a href = "aboutUS/Application/Application.php"> Forms and Downloads </a> </li>
            <!-- To add another menu copy and paste the code at the top and change the context. SAME FOLLOWS FOR OTHER MENU'S-->

          </ul>
        </li>

        <li class = "nav-submenu"> <a href = "#">Courses</a>
          <ul>
            <li> <a href = "Pathways/Hardware/Hardware(Web).php#ITE"> Introduction to Engineering </a> </li>
            <li> <a href = "Pathways/Hardware/Hardware(Web).php#PDE"> Product Design  & Engineering </a> </li>
            <li> <a href = "Pathways/Hardware/Hardware(Web).php#POE"> Principles of Engineering </a> </li>
            <li> <a href = "Pathways/Hardware/Hardware(Web).php#EDD"> Engineering Design and Development </a> </li>
            <li> <a href  = "Pathways/Software/Software(Web).php#CSP"> Computer Science Principles </a> </li>
            <li> <a href = "Pathways/Software/Software(Web).php#CSA"> Computer Science Applications </a> </li>
          </ul>
        </li>

        <li class = "nav-submenu"> <a href = "#"> Gallery</a>
          <ul>
            <li> <a href = "Gallery/Images/Images.php"> Images </a> </li>
            <li> <a href = "Gallery/Videos/Video.php">Videos </a> </li>
            <li> <a href = "Gallery/inthepress/inthepress.php"> In the Press </a> </li>
          </ul>
        </li>


        <li> <a href = "PathwaysNew/Pathways.php"> Pathways</a> </li>

        <li> <a href = "Boosters/Boosters.php"> T-Tech Boosters </a> </li>

        <li> <a href  = "ContactUS/Contact.php"> Contact us </a> </li>


        <!--  <li class = "button">
        <input class = "text" type="text" placeholder="Search" required>
      </li> -->

    </ul>
  </nav>
</div>

<!-- Script for the dropdown of menu's -->
<script src="js/nav.jquery.min.js"></script> <!-- ****** NEVER EVER MESS WITH THIS CODE****** -->
<script>
$('.nav').nav();
</script>

<div style = "height: 5px; width: 100%; ">  </div><!-- Extra space to just be organized -->

<!-- ***************Navigation menu   Responsive to mobile and desktop  END************************-->


<!-- **************** T-Tech News and Information BEGINS ****************-->
<div class ="Forms_Info">
  <section>
    <h2>  <span style = "color:gray; font-size: 22px;"> &#9777; </span> <span style = "margin-left: 10px;">  T-Tech News </span> </h2>
    <p> News and Information </p>
    <ul>
      <!-- To add a news copy and paste the code below and change the context -->
      <li>   <p> <a href = "AddOptions/Femineer/femineer.php"  >&#9679; &nbsp;Learn about Tustin's Fabulous Femineers.</a> </p> </li>
      <li>   <p> <a href = "Gallery/inthepress/inthepress.php"  >&#9679; &nbsp;Tustin High School T-Tech awarded technology grant!!!</a> </p> </li>
      <li>   <p> <a href = "#"  style = "text-decoration: none; cursor : text">&#9679; &nbsp;  Brand New T-Tech Website!</a> </p> </li>
      <li>   <p> <a href = "Gallery/inthepress/inthepress.php"  >&#9679; &nbsp;  Congratulations Sishir!! for winning 3rd place for California's 45th congressional district at Congressional App Challenge.</a> </p> </li>
      <li>   <p> <a href = "Gallery/inthepress/inthepress.php"  >&#9679; &nbsp; News and Information from Superintendent Dr. Gregory Franklin.</a> </p> </li>
      <li>   <p> <a href = "Gallery/Images/Images.php"  >&#9679; &nbsp; View Images of Tillers working hard on their project.</a> </p> </li>
      <li>   <p> <a href = "http://engineering.uci.edu/news/2016/12/q-alumnus-ed-hernandez-91"  >&#9679; &nbsp; Q & A with Mr. Hernandez in UC Irvine School of Engineering's homepage!  </a> </p> </li>
      <li>   <p> <a href = "Gallery/inthepress/inthepress.php"   >&#9679; &nbsp;   Angelica Verde featured in Orange County Career Pathways Showcase. </a> </p> </li>
      <li>   <p>  <a href = "AddOptions/InvenTeams/InvenTeams.php"> &#9679; &nbsp;  T-Tech is going to MIT </a> </p> </li>
      <li>   <p>  <a href = "#" style = "text-decoration: none; cursor : text"> &#9679; &nbsp;  T-Tech touring Virgin Galactic with the Orange County Department of Education! </a> </p> </li>
      <li>  <p> <a href = "#" style = "text-decoration: none; cursor : text"> &#9679;  &nbsp;  Congratulations to T-Tech 2016 Boeing Interns! </a> </p> </li>
      <li>   <p> <a href = "#" style = "text-decoration: none; cursor : text"> &#9679;  &nbsp;  T-Tech wins 1st and 2nd at UCI Energy Invitational </a> </p> </li>
      <li>   <p> <a href = "Boosters/Boosters.php"  >  &#9679; &nbsp;  T-Tech  Booster Meeting Update</a> </p> </li>
      <li>   <p> <a href = "AddOptions/StudentProject/StudentProject.php" > &#9679;  &nbsp;  Award Winning  T-Tech Student Projects  </a> </p> </li>


    </ul>
  </section>
</div>

<!-- ********************T-Tech News and Information ENDS ************************-->


<!--************************* T-Tech context and Images slider BEGINS  *************************-->

<!--- ***** [ NOTE ]  ******* -->
<!---------- **** MAX AMOUNT OF SLIDES IN THE SLIDER IS 5 ******** ---->
<!------*** [ NOTE ]******* -->


<div id="wrapper"   >
  <!-- Slideshow 1   -->
  <div class="rslides_container">
    <ul class="rslides" id="slider1">

      <!--First slider i.e. Boeing BEGINS -->
      <li style = "width: 87%; margin-left: 6.3%;">
        <img src="images/1.png" alt="">
        <!--<a class = "caption Boe" href = "#"> Learn More... </a>  -->
      </li>
      <!-- First slider i.e. Boeing ENDS -->


      <!--Second slider i.e.  Prosthetic Arm BEGINS -->
      <li>
        <img src="images/2.png" alt="" >
        <div class="caption ProsArm">
          <h2>Making a Difference</h2>
          <p>Four  T-Tech students design and build a   prosthetic for   Irvine seventh-grader</p>
          <a   href = "AddOptions/StudentProject/StudentProject.php"> Learn More.. </a>
        </li>
        <!--Second slider i.e.  Prosthetic Arm ENDS -->


        <!-- Third slider i.e.  Pathways (Hardware and Software) BEGINS -->
        <li style = "width: 85.5%; margin-left: 7.2%;"> <a href = "http://sites.uci.edu/energyinvitational/">
          <img src="images/5.jpg" alt="UCI Energy Invitational" >
        </a>
      </li>
      <!-- Third slider i.e.  Pathways (Hardware and Software) ENDS -->


      <!-- Forth slider i.e. UCI Energy Invitational BEGINS -->
      <li style = "width: 87%; margin-left: 6.3%;">
        <img src="images/4.jpg" alt="UCI Energy Invitational">
        <div class="caption  uCi"><h2>UCI Energy Invitational</h2></div>
        <a  class = "caption  uCiLM" href = "http://sites.uci.edu/energyinvitational/"> Learn More... </a>
      </li>
      <!-- Forth slider i.e. UCI Energy Invitational ENDS-->

      <!-- Fifth slider i.e. InvenTeams BEGINS -->
      <li style = "width: 85.5%; margin-left: 7.2%;"><a href  = "AddOptions/InvenTeams/InvenTeams.php">
        <img src="images/LemMit.jpg" alt="MIT InvenTeams">
      </a>
    </li>
    <!-- Fifth slider  i.e. InvenTeams Ends-->

    <!--- ***** [ NOTE ]  ******* -->
    <!---------- **** MAX AMOUNT OF SLIDES IN THE SLIDER IS 5 ******** ---->
    <!------*** [ NOTE ]******* -->

  </ul>
</div>

</div>
</div>





<!-- Simple T-Tech Twitter Feed BEGINS (No need to change anything) -->
<div class = "TwitterFeed">
  <a class="twitter-timeline"   data-chrome="nofooter"  data-border-color="#eee"  height = "360"  width = "350"  data-aria-polite="assertive"  data-font-family= "Segoe UI"  href="https://twitter.com/TustinTTech">Tweets by TustinT-Tech</a>
</div>

<script>
!function(d,s,id)
{
  var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
  if(!d.getElementById(id))
  {
    js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
    fjs.parentNode.insertBefore(js,fjs);
  }
}

(document,"script","twitter-wjs");
</script>

<!-- Simple T-Tech Twitter Feed ENDS(No need to change anything) -->



<div style = "height: 5px; width: 100%; position: relative;  clear: both;"></div> <!-- Extra space to just be organized -->

<div class = "invisible" style = "height: 5px; width: 100%; "> </div> <!-- Extra space to just be organized -->

<!-- ******* Four Navigation buttons with pics and context BEGIN ******* -->

<!--- ***** [ NOTE ]  ******* -->
<!---------- **** MAX AMOUNT OF BUTTONS  4 ******** ---->
<!------*** [ NOTE ]******* -->

<div class = "buttons">
  <section>
    <button class = "bng" > <a href = "AddOptions/Internships/Internships.php" >  <img src = "images/internships.png" alt = "Internships" ></a> </button>
    <button class = "UCI"> <a href = "AddOptions/Femineer/femineer.php">   <img src = "images/femineer.png"alt = "Femineers" ></a> </button>
    <!--<button class = "UCI"> <a href = "http://sites.uci.edu/energyinvitational/">   <img src = "images/UCI1.png"alt = "UCI Energy Invitational" ></a> </button> -->
    <button class = "Achie" > <a href = "AddOptions/InvenTeams/InvenTeams.php"> <img src = "images/MIT_Lin.png"  alt = "MIT InvenTeams" > </a> </button>
    <button class = "Stdproj"> <a href  = "AddOptions/StudentProject/StudentProject.php">   <img src = "images/studentproject1.png" alt = "Student Projects" > </a> </button>
  </section>
</div>

<!--- ***** [ NOTE ]  ******* -->
<!---------- **** MAX AMOUNT OF BUTTONS  4 ******** ---->
<!------*** [ NOTE ]******* -->

<!-- ******* Four Navigation buttons with pics and context  ENDS ******* -->

<!--************ Quick links BEGIN ********* -->
<div class = "credit">
  <div class  = "position">
    <section class = "posSec">
      <img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
      <p>Home </p>
    </section>
  </div>

<?php
  $back = "";
  include("fileHolder/footernav.php");
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

<!--************ Quick links ENDS ********* -->

</body>
</html>
<!-- ************* T-Tech (Webton) Homepage END.  Copyright 2016, Sishir Giri All rights reserved. *****************-->
