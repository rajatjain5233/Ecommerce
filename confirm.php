<?php
include('lock.php');
?>
<?php 
  
     $login_session=$row['username'];
	 $query = "INSERT INTO customerorder (cususername) VALUES ('$login_session')";
	 $data = mysql_query ($query) or die(mysql_error()); 
      if($data)
	   {
		   echo "YOur order has been processed thanks"; 
		 
	   }
      
  

 ?>