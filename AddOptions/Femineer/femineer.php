<!DOCTYPE html>
<html>
<head>
  <title>Femineers</title>
  <meta charset = "UTF -8" />
  <link rel="icon" type="image/gif/png" href="../InvenTeams/Logos/Tustin.png">
  <link rel = "stylesheet" href = "femineer.css">
  <link rel = "stylesheet" href = "../InvenTeams/css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  <!-- New ***** -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">

  <link rel="stylesheet" href="../InvenTeams/css/normalize.min.css">
  <link rel="stylesheet" href="../InvenTeams/css/defaults.min.css">
  <link rel="stylesheet" href="../InvenTeams/css/nav-core.min.css">
  <link rel="stylesheet" href="../InvenTeams/css/nav-layout.min.css">
  <!-- /*********** -->




  <link href="../InvenTeams/css/ninja-slider.css" rel="stylesheet" type="text/css" />
  <script src="../InvenTeams/js/ninja-slider.js" type="text/javascript"></script>
</head>

<body >


  <!-- Nav Menu Begin
  /********************************* -->
  <!-- Mobile Menu -->
  <header class = "Mob_logo" >
    <a href = "../../Homepage.php"> <img src = "../InvenTeams/Logos/Tustin.png" alt = "logo"   style = "margin-top: 5px;"/> </a>
  </header>
  <a href="#" class="nav-button" style = "background: white;">Menu</a>
  <!-- Mobile Menu End -->

  <?php
  $back = "../../";
  include("../../fileHolder/headernav.php");
  ?>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="../InvenTeams/js/nav.jquery.min.js"></script>
  <script>
  $('.nav').nav();
  </script>
  <!-- Nav Menu End
  /********************************* -->

  <div style = "margin-top: 65px;"> </div>
  <div class="wrapper">
    <div class="cover">

              <div class = "gallery">
                 <b> <p> <span style = "font-size: 20px;"> Tustin Femineers Gallery </span> </p> </b>
                 <img src = "img/fem1.png" alt = "Femineers"/>
                  <img src = "img/fem2.png" alt = "Femineers"/>
                  <img src = "img/fem3.jpg" alt = "Femineers"/>
                   <img src = "img/fem4.jpg" alt = "Femineers"/>
                   <img src = "img/fem5.jpg" alt = "Femineers"/>
                    <img src = "img/fem6.jpg" alt = "Femineers"/>
                    <img src = "img/fem7.jpg" alt = "Femineers"/>
                     <img src = "img/fem8.png" alt = "Femineers"/>
              </div>


      <div class = "info">
        <p>
          <span> About Femineers </span> <br>
          The Femineer© Program was created and funded by Cal Poly Pomona’s College of Engineering in 2013 to inspire additional females to pursue STEM (Science, Technology, Engineering, Math) in their education and career.
          The program provides K-12 students with project-based learning, female engineering student mentors, and opportunities to visit Cal Poly Pomona, while building a sustainable program and community for current and future STEM leaders.
        </p>
        <p> <span >  Fabulous Femineers </span> <br>
          The Tustin Femineers have been busy!  Our female Tillers have been working hard designing, building and programing their ‘creative robotics’ project that will be showcased at Cal Poly Pomona April 7.  This amazing program is an opportunity for young woman interested in pursuing careers in various STEM (Science, Technology, Engineering and Math) fields to explore different college and career options, learn to use tools, and create unique projects that allow them to develop life-long critical thinking skills.   We will be hosting a Women of STEM evening May 24…stayed tuned for further information. </p>
        </div>



      </div>
    </div>


    <div style ="height: 8px;">
    </div>


    <div class = "credit">
      <div class  = "position">
        <section class = "posSec">
          <img src = "../InvenTeams/Logos/Tustin.png" alt = "TTech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
          <p> Tustin Femineers</p>
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
