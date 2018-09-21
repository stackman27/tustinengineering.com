<!DOCTYPE html>
<html>
<head>
  <title> Student Application</title>
  <meta charset = "UTF -8" />
  <link rel="icon" type="image/gif/png" href="Logos/Tustin.png">
  <link rel = "stylesheet" href = "Application.css">
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


  <div class = "Application" >
    <section>

      <div class = "Appli1" style = "width: 23%;">
        <a href = "Forms/Brochure.pdf " download> <img src = "ApplicationImg/Brochure.png" alt = "T-Tech Application"  style  = "width: 100%;"/>
          <h2>TTech Trifold</h2> </a>
        </div>

        <div class = "Appli1">
          <a href = "Forms/ttechapplication8thgrade.pdf" download> <img src = "ApplicationImg/App2.png" alt = "T-Tech Application" />
            <h2> 2017-18 Ttech Application 8th grade </h2> </a>
          </div>

          <div class = "Appli1">
            <a href = "Forms/ttechapplication9-12grade.pdf" download> <img src = "ApplicationImg/App1.png" alt = "T-Tech Application" />
              <h2 style = "font-size: 17px;"> 2017-18 Ttech Application 9th-12th  </h2> </a>
            </div>

            <div class = "Appli1"  >
              <a href = "Forms/TtechAdmissionRubric.pdf " download> <img src = "ApplicationImg/AppRubric.png" alt = "T-Tech Application" />
                <h2  > T-Tech Admission Rubric. </h2> </a>
              </div>

              <hr>

              <div class = "Appli1"  >
                <a href = "Forms/ite.pdf " download> <img src = "ApplicationImg/class.PNG" alt = "T-Tech Application" />
                  <h2> Intro to Engineering </h2> </a>
                </div>


                <div class = "Appli1"  >
                  <a href = "Forms/edd.pdf " download> <img src = "ApplicationImg/class1.PNG" alt = "T-Tech Application" />
                    <h2> Engineering Design & Development </h2> </a>
                  </div>

                  <div class = "Appli1"  >
                    <a href = "Forms/poe.pdf " download> <img src = "ApplicationImg/class2.PNG" alt = "T-Tech Application" />
                      <h2> Principles of Engineering </h2> </a>
                    </div>


                  <div class = "Appli1"  >
                    <a href = "Forms/pde.pdf " download> <img src = "ApplicationImg/class3.PNG" alt = "T-Tech Application" />
                      <h2> Product Design & Engineering </h2> </a>
                    </div>

            </section>

          </div>

          <div style ="height: 5px;">
          </div>


          <div class = "credit">
            <div class  = "position">
              <section class = "posSec">
                <img src = "Logos/Tustin.png" alt = "T-Tech_ logo"  height = "30" width = "40"  style = "float: left; vertical-align: middle;"/>
                <p>Forms and Downloads</p>
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
