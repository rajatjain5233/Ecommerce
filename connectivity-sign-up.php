<?php
include("functions/functions.php");
?>
<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'ecommerce'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 










function NewUser() 
{
   $fullname = $_POST['name']; 
   $userName = $_POST['user'];
   $email = $_POST['email']; 
   $password = $_POST['pass']; 
   $address = $_POST['address'];
   $ip =getIp();
   $query = "INSERT INTO websiteusers (fullname,userName,email,passcode,address,ip) VALUES ('$fullname','$userName','$email','$password','$address','$ip')"; 
   $data = mysql_query ($query) or die(mysql_error()); 
   if($data)
	   {
		   echo "YOUR REGISTRATION IS COMPLETED"; 
		   
		   
		   
		   
		   
	   }
 }
 
 function SignUp()
 { 
    if(!empty($_POST['user']))  
  { 
     $query = mysql_query("SELECT * FROM websiteusers WHERE userName = '$_POST[user]' AND passcode = '$_POST[pass]'") or die(mysql_error()); 
	 if(!$row = mysql_fetch_array($query) or die(mysql_error())) 
	 { 
     newuser();
     }
    else 
     { 
      echo "SORRY...YOU ARE ALREADY REGISTERED USER..."; 
     } 
   } 
 
 }
  
 if(isset($_POST['submit']))
	 { SignUp(); } 
?>
