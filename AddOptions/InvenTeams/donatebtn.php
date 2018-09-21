<!-- MIT APP Inventor Widget Donate Button -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Donate Button</title>
</head>
<body>

  <div id ="donate_btn">
    <p style = "font-family:Calibri light;font-weight: 600;font-size: 24px;height:20px; margin-top:10px;color: red;"> Send Tustin High to MIT! </p>

    <img src = "images/LemMit.jpg" alt = "TustinHighInvenTeam" style = "width: 100%; height: 175px;background-position: center center; box-shadow: 0 0 3px red;"/>
    <p style = "margin-top: 2px; border-bottom: 1px solid lightgray;font-family:sans-serif; font-size: 15px; padding: 3px;font-weight: 600; color: #f6290c;">  0% Raised </p>
    <p style = "font-family: Calibri;color:gray; font-size: 18px;">   Click to donate now  &#8595; </p>
    <a href = "https://www.gofundme.com/tustininventeam">
      <button type="button" name="button">
      <img src = "images/fundme.png" alt = "GoFundMe" style ="width: 95%;  "/>
    </button>
  </a>
    <br>
    <br>
  </div>

  <style>
  #donate_btn {
    height: auto;
    overflow: hidden;
    margin: 0 auto;
    border: 1px solid red;
    width: 300px;
    text-align: center;
    box-shadow: 0 0 10px red;
  }

  button {
    /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f6290c+17,f6290c+17,f6290c+40,f6290c+46,f85032+94,f85032+94 */
    background: #f6290c; /* Old browsers */
    background: -moz-linear-gradient(top,  #f6290c 17%, #f6290c 17%, #f6290c 40%, #f6290c 46%, #f85032 94%, #f85032 94%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  #f6290c 17%,#f6290c 17%,#f6290c 40%,#f6290c 46%,#f85032 94%,#f85032 94%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  #f6290c 17%,#f6290c 17%,#f6290c 40%,#f6290c 46%,#f85032 94%,#f85032 94%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6290c', endColorstr='#f85032',GradientType=0 ); /* IE6-9 */

    border-radius: 10px;
    width: 75%;
    margin-top: -15px;
  }

  a{
    text-decoration: none;
  }

  a:hover {
    cursor: pointer;
  }

  </style>

</body>
</html>
