<!DOCTYPE>
<?php
include("functions/functions.php");
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
		   <img id="ad_banner" src="images/ecommerce100.jpg" /> 
		    
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
			   <font size="8">Sign up</font>
			   <tr>
			   <table border="0"> 
			   <tr>
			   <form method="POST" action="connectivity-sign-up.php">
			   <td>Name</td>
			   <td> 
			   <input type="text" name="name">
			   </td> 
			   </tr> 
			   <tr>
			   <td>Email</td>
			    <td>
			    <input type="text" name="email">
			    </td> 
			   </tr> 
			   <tr>
			   <td>UserName</td>
			   <td> 
			   <input type="text" name="user"></td>
			   </tr>
			   <tr> 
			   <td>Password</td>
			   <td> 
			   <input type="password" name="pass">
			   </td>
			   </tr> 
			   <tr> 
			   <td>Confirm Password </td>
			   <td><input type="password" name="cpass">
			   </td>
			   
			   </tr> 
			   <tr> 
			   <td>Address </td>
			   <td><input type="text" name="address">
			   </td>
			   
			   </tr> 
			   <tr> 
			   <td>
			   <input id="button" type="submit" name="submit" value="Sign-Up">
			   </td>
			   </tr> 
			   </form> 
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























