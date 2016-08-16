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
			   </div >
			   <div id="products_box">
                <form action="" method="post" enctype="multipart/form-data">
				   <table align="center" width="700" bgcolor="skyblue">
				     
					 <tr align="center">
					   <th> Remove </th>
					   <th> Product </th>
					   <th> Quantity </th>
					   <th>Total price</th>
					 
					 </tr>
					 <?php
					      $total=0;
	                      $ip=getIp();
	                      $sel_price="select * from cart where ip_add='$ip'";
	                      $run_price=mysqli_query($con,$sel_price);
                          while($p_price=mysqli_fetch_array($run_price)){
		                    $pro_id=$p_price['p_id'];
		                   $pro_price="select * from products where product_id='$pro_id'";
        
        $run_pro_price = mysqli_query($con,$pro_price);
		
        while($pp_price = mysqli_fetch_array($run_pro_price)){
			
			$product_price=array($pp_price['product_price']);
			$product_title=$pp_price['product_title'];
			$product_image=$pp_price['product_image'];
			$single_price =$pp_price['product_price'];
		    $values=array_sum($product_price);
			$total+=$values;
                 	?>
					<tr align="center">
					   <td><input type="checkbox" name="remove[]" value="<?php echo $pro_id;?>"/></td>
					   <td><?php echo $product_title;?><br>
					   <img src="admin_area/product_images/<?php echo $product_image;?>" width="60" height="60"/>
					   
					   
					   </td>
					   <td><input type="text" size="3" name="qty"</td>
					   <td><?php echo "$" . $single_price;?></td>
					
					
					</tr>
					

					
					
					
					
					
	           <?php }}?>
              		<tr align .= "right">
					  <td colspan="4"><b>Sub total</td>
					  <td colspan="4"><?phpecho "$" . $total;?> </td>
					
					</tr>
					<tr align="center">
					  <td colspan="2"><input type="submit" name="update_cart" value="update Cart"></td>
					  <td><button><a href="all_products.php" style="text-decoration:none; color:black;"> Continue shopping </a></button></td>
					  <td><button><a href="sign_in.php" style="text-decoration:none; color:black;">     Order now      </a></button></td>
					</tr>
					
					

			   </table> 
			   </form>
			   <?php
			     $ip =getIp();
				 
			     if(isset($_POST['update_cart'])){
					 
					 foreach($_POST['remove'] as $remove_id){
				      $delete_product = "delete from cart where p_id = '$remove_id' AND ip_add='$ip'";
					  $run_delete=mysqli_query($con,$delete_product);
					    if($run_delete)
					     {
						        echo "<script>window.open('cart.php','_self') </script>";
					     }
					 }
					 
				 }
			   
			   
			   ?>
			   
			   
			   
			   
			   </div>			
			</div>
		    
		</div> 
		<!--content_wrapper ends from here-->
		
		
		<div id="footer">
		<h2 style="text-align:center; padding-top:30px;">2016 by SHUBHAMKUMAR</h2>
		<h2 style="text-align:center; padding-top:30px;">2016 by RajatJain </h2>
		</div>
		 
   	
   
   </div>
   <!--Main container starts from here-->



</body>
</html>