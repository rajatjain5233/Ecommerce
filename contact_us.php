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
			      <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
				   Welcome Guest!<b style="color:yellow">Shopping Cart -</b> Total Items :<?php total_items();?> Total Price: <?php total_price(); ?> <a href="cart.php"style="color:yellow">Go to Cart</a> 
				  </span>
			   </div>
			   <div id="products_box">
               <h2 style="text-align:left; padding-top:30px;">For any help Contact our Call center Experts</h2>
			   <h2 style="text-align:left; padding-top:30px;">Shubham kumar:8602307182 </h2>
			   <h2 style="text-align:left; padding-top:30px;">Rajat jain   :8602416446 </h2>
			   
			   
			   </div>			
			</div>
		    
		</div> 
		<!--content_wrapper ends from here-->
		
		
		<div id="footer">
		<h2 style="text-align:center; padding-top:30px;">2016 by SHUBHAMKUMAR.com</h2>
		<h2 style="text-align:center; padding-top:30px;">2016 by RajatJain.com</h2>
		</div>
		 
   	
   
   </div>
   <!--Main container starts from here-->



</body>
</html>