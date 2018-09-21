<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "../css/viewEmail.css">
<title> Control panel Login </title>
</head>

<body>
   <div class = "whole">
       <div class = "Img">
	    <img src = "../Logos/TTech.jpg" style = "height: 100px; width: 107px;"/>
		 <p style="margin-top: 0px; font-family: Calibri;">© WebTon 2016 </p> 
	   </div>
   
    <div class = "ttLogin">
      <form action = ""  method = "POST">
	  <input type = "text" name = "user" placeholder = "Username" class = "text" required> <br/>
	  <input type = "password" name = "pass" placeholder = "Password" class = "text" required> <br/>
	  <input type = "submit" value = "Log in" name = "submit" class = "Go" /> 
	  </form> 
	  </div> 
   </div>  
   <?php
include("connection.php");

if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
	$user=$_POST['user'];
	$pass=$_POST['pass'];

	 
	$query=mysql_query("SELECT * FROM  users WHERE username='".$user."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbpassword=$row['password'];
	}

	if($user == $dbusername && $pass == $dbpassword)
	{
	 
	$_SESSION['sess_user']=$user;
echo("<script>window.location.href ='phpFunctions.php'; </script>");
	}
	} else {
	echo "<script> alert('Invalid username or password!') </script>";
	}

} else {
	  echo "<script> alert('All fields are required!') </script> ";  
}
}
?> 
</body>
</html> 
