<?php
include('lock.php');
?>
<html>
   <head>
       <title>My Online shop </title>
	   
	   
	<link rel="stylesheet" href="styles/style.css" media="all"/>
	
	
	
<body>
<h1>Welcome <?php echo $login_session; ?> to confirm order please click confirm</h1>
   
<form method="get" action="confirm.php">
    <button type="submit">Confirm</button>
</form>

 </body>
</head>
	</html>