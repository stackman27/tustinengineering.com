<!-- Inserting Emails to the database -->
<?php 

	 $con=mysql_connect('localhost','root','nepal') or die(mysql_error());
	mysql_select_db('emails') or die("cannot select DB");
	

if(isset($_POST["submit"])) {
 $email = $_POST['fname'];
 
 $sql = "INSERT INTO emails(email,date) VALUES ('$email', NOW())";
 
  $run = mysql_query($sql);
				
				if($run) 
				{
					echo " <script> alert('Post Successful.') </script> ";
 
				}
 
}
 

?>


 