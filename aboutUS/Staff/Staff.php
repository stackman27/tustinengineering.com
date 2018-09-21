<!DOCTYPE html>
<html>
<head>
  <title> Staff </title>
  <meta charset = "UTF -8" />
  <link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
  <link rel = "stylesheet" href = "Staff.css">
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



  <div class = "StaffList">

    <div class = "Staff1" >
      <div class ="StaffImg">
        <img src = "Images/BRice.jpg" alt = "Bryan Rice"   style = "margin-top: 15px;"/>
      </div>
      <div class = "StaffInfo">
        <h2>Bryan Rice </p>
          <p style = "line-height: 30px;"> Introduction to Engineering, Mathematics </p>

          <p style = "color: blue;">  brice@tustin.k12.ca.us </p>
        </div>
      </div>

      <div class = "Staff1"  id = "MrHernandez">
        <div class ="StaffImg"  >
          <img src = "Images/Mr.Hernandez.jpg" alt = "Mr. Hernandez"   style = "margin-top: 15px;"/>
        </div>

        <div class = "StaffInfo">
          <h2> Ed.  Hernandez </h2>
          <p style = "line-height: 30px;">  Enginnering, T-Tech Director</p>
          <p style = "line-height: 30px; margin-top: -15px;"> BS Electrical & Computer Engineering, UC Irvine</p>
          <p style = "line-height: 30px;" > (714) 730-7414 x 414</p>
          <p style = "color: blue;">  ehernandez@tustin.k12.ca.us </p>
        </div>
      </div>

      <div class = "Staff1">
        <div class ="StaffImg">
          <img src = "Images/KPosavec.jpg" alt = "Kris Posavec"  style = "margin-top: 15px;"/>
        </div>
        <div class = "StaffInfo">
          <h2> Kris Posavec </p>
            <p style = "line-height: 30px;" > Femineers Advisor, Biology </p>

            <p style = "color: blue;"> kposavec@tustin.k12.ca.us </p>
          </div>
        </div>

        <div class = "Staff1">
          <div class ="StaffImg">
            <img src = "Images/TAlbright.jpg" alt = "Trisa Albright"   style = "margin-top:15px;"/>
          </div>
          <div class = "StaffInfo">
            <h2> Trisa Albright </p>
              <p style = "line-height: 30px;" > Computer Science, Mathematics </p>

              <p style = "color: blue;"> talbright@tustin.k12.ca.us </p>
            </div>
          </div>





        </div>

        <div style ="height: 8px;">
        </div>

        <div class = "credit">
          <div class  = "position">
            <section class = "posSec">
              <img src = "Logos/Tustin.png" alt = "TTech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
              <p>Staff</p>
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
