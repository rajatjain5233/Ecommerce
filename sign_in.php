<!DOCTYPE>
<?php
include("functions/functions.php");
?>
<?php
  $con=mysqli_connect("localhost","root","","ecommerce"); 


?>



<html>
   <head>
       <title>My Online shop </title>
	   
	<link rel="stylesheet" href="styles/style.css" media="all"/>
	
	</head>
   <body>	
     <!--Main container starts from here-->
      <div class="main_wrapper">
   
        <!--Header starts from here-->
        <div class ="header_wrapper">
		   <a href="index.php">
		   <img id="logo" src="images/shineon.gif" /></a> 
		   <img id="ad_banner" src="images/ecommerce.gif" /> 
		    
        </div>
        <!--Headers ends from here-->
		
		
		
		<!--Navigation bar starts from here-->
		<div class="menubar">
		  
		  <ul id="menu">
		   <li><a href="index.php">Home</a></li>
		   <li><a href="all_products.php">Products</a></li>
		   <li><a href="admin_area\insert_product.php">Sell</a></li>
		   <li><a href="sign_up.php">Sign Up</a></li>
		   <li><a href="cart.php">Shopping Cart</a></li>
		   <li><a href="contact_us.php">Contact Us</a></li>
		  
		  </ul>
		  <div id="form">
		     <form method="get" action="results.php" enctype="multipart/form-data">
		       <input type="text" name="user_query" placeholder="Seach a product"/>
		       <input type="submit" name="search" value="Search"/>
			 </form>
		  </div>
		</div>
        <!--Navigation ends here-->
		
		
		
		
		<!--content_wrapper starts from here-->
		<div class="content_wrapper">
            <div id="sidebar">
			   <div id="sidebar_title">Categories</div>
			      <ul id="cats">
			    <?php getCats();?>
				
			   
			   
			   <ul>
		     <div id="sidebar_title">Brands</div>
			   <ul id="cats">
			    
				<?php getBrands();?>
			    
			   
			   
			   <ul>
			
			
			
			</div>
	        
			
			<div id="content_area">
			<?php cart();?>
			   <div id="shopping_cart">
			      
			   </div >
			   <div id="products_box">
			    <font size="8">LOG IN</font>
			   <tr>
			   <table border="0"> 
			   <tr>
			   
			   
               <div class = "container form-signin">
               <?php
                 include("config.php");
                session_start();
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                   // username and password sent from Form
                  $myusername=addslashes($_POST['username']);
                  $mypassword=addslashes($_POST['password']);
 
                  $sql="SELECT id FROM websiteusers WHERE username = '$myusername' and passcode='$mypassword'";
                  $result=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
                  $row=mysql_fetch_array($result);
                  $active=$row['active'];
                  $count=mysql_num_rows($result);
 
                  
                   // If result matched $myusername and $mypassword, table row must be 1 row
                  if($count==1)
                      {
						 
                       $_SESSION['username']= "username";
                       $_SESSION['login_user']=$myusername;
 
                       header("location: welcome.php");
                      }
                  
                 }
               ?>
			   
			  
              <form action="" method="post">
              <label>UserName :</label>
              <input type="text" name="username"/><br />
               <label>Password :</label>
              <input type="password" name="password"/><br />
              <input type="submit" value=" Submit "/><br />
              </form>
               
               </div> 
			   




			   
			   </table>			   
			   </div>			
			</div>
		    
		</div> 
		<!--content_wrapper ends from here-->
		
		
		<div id="footer">
		<h2 style="text-align:center; padding-top:30px;">2016 by www.SHUBHAMKUMAR.com</h2>
		<h2 style="text-align:center; padding-top:30px;">2016 by www.RajatJain.com</h2>
		</div>  
   </div>
   <!--Main container starts from here-->
</body>
</html>























