<!-- Connection.php -->

<?php 
    
	  $db_name = 'ttech_emails2016';
	  $mysql_username = 'ttech_emails';
	  $mysql_password = 'Tustintillers2013!';
	  $server_name = 'fstedie.fatcowmysql.com';
	  
	  $connection = mysql_connect($server_name,$mysql_username,$mysql_password,$db_name) or die(mysqli_error());
         mysql_select_db('ttechemails') or die("cannot select DB");
 
?>