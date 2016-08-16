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
		   <a href="index.php"><img id="logo" src="images/shineon.gif" /></a>
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
		       <input type="text" name="user_query"placeholder="Seach a product"/>
		       <input type="submit" name="search" value="Search"/>
			 </form>
		  </div>
		</div>
        <!--Navigattion ends here-->
		
		
		
		
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
			   <div id="shopping_cart">
			      <span style="float:right; font-size:18px; padding:5px; line-height:40px;">
				   Welcome Guest!<b style="color:yellow">Shopping Cart -</b> Total Items : Total Price: </b><a href="cart.php"style="color:yellow">Go to Cart</a> 
				  </span>
			   </div >
			   <div id="products_box">
          <?php               
			   $get_pro="select *from products ";
	          $run_pro=mysqli_query($con,$get_pro);
	    while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];
		echo"
         <div id='single_product'>
            
			<h3>$pro_title </h3> 
		    <img src='admin_area/product_images/$pro_image' width='180' height='180'/>  
			<p>  <b> $ $pro_price </b> </p>
            <a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>
          		    
			 <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>
		 </div>	
		";
		
		  //<!--you cant use double quotes in div tag because echo already has it	  
		 //we dont have any css style so we create one in style.css-->
		//img is a tag  inside source search for this image with temporary  name pro_image and display it 
	}
	?>
			 
			   
			   </div>			
			</div>
		    
		</div> 
		<!--content_wrapper ends from here-->
		
		
		<div id="footer">
		<h2 style="text-align:center; padding-top:30px;">&copy;2016 by www.SachinDHAKER.com</h2>
		<h2 style="text-align:center; padding-top:30px;">&copy;2016 by www.Saurabh.com</h2>
		
		</div>
		 
   	
   
   </div>
   <!--Main container starts from here-->



</body>
</html>