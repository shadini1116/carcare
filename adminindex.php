<?php   
  
 $connect = mysqli_connect("localhost", "root", "", "carcare");  
?> 

	 <?php
	session_start();
	if(!isset($_SESSION['name']))
	
	{
		header("location: adminindex.php");
	}
	$name=$_SESSION['name']; 
	$id=$_SESSION['id']; 
	$email=$_SESSION['email'];
	
	
	$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));	
	$result2 =  $mysqli->query("select product_name, COUNT(product_name) AS MOST_FREQUENT
from tbl_order_details
GROUP BY product_name
ORDER BY COUNT(product_name) DESC
")or die ($mysqli->erorr);	
	
 
	?>
	   <?php
 $conn = mysqli_connect("localhost", "root", "", "carcare");  
$result= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as average FROM tbl_order_details where date between '2022-01-01' and '2023-01-01' ;");
$row = mysqli_fetch_array($result); 
$average = $row['average'] ;
 ?>
			  
		   <?php
 $conn = mysqli_connect("localhost", "root", "", "carcare");  
$result= mysqli_query($conn,"SELECT SUM(product_quantity) as orders FROM tbl_order_details where date between '2022-01-01' and '2023-01-01' ;");
$row = mysqli_fetch_array($result); 
$orders = $row['orders'] ;
 ?>	


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Profile of <?php echo $name; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <link rel="shortcut icon" href="photos/car care logo (2).png" type="image/x-icon" /> 


  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 228px;
  background-color:rgba(160,160,160,1.00);
}

li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
	font-size: 20px;
}

li a.active {
  background-color: aqua;
  color: black;
}

li a:hover:not(.active) {
  background-color: darkorchid;
  color: black;
}
	
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;

  margin: auto;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 5.5s;
  animation-name: fade;
  animation-duration: 5.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
	  
	  
	  </style>
	  
 
 </head>
	<body style="background-color: rgba(160,160,160,1.00)" > 
<div id="loader"></div>
	

<div class="section2" align="center"   >
	
<img src="photos/car care logo (2).png" alt="Smiley face" width="400px"  style="vertical-align:middle">
	
<div align="right" style="margin-top: -50px"> 
<a class="btn  " style="background-color: mediumvioletred; color: white"  > <i class="fa fa-user-circle-o"></i> Admin <?php echo $name; ?>&nbsp;   </a>
<a class="btn " style="background-color: mediumvioletred; color: white"  href="adminLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  
</div>			

</div>	
	
  <div class="mainframe"   >
<div class="section1_admin"  >

<ul>
<li><div align="center"><a class="active" href="adminindex.php">Home</a></div></li>		
<li><div align="center"><a href="sales.php">Sales Reports</a></div></li>	
<li><div align="center"><a href="customermanage.php">Customers</a></div></li>
  
 
  <button class="dropdown-btn">Products 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
  <li><div align="center">  <a href="productscategory1.php">Batteries</a></div></li>
   <li><div align="center"> <a href="productscategory2.php">Spareparts</a></div></li>
	<li><div align="center"><a href="productscategory3.php">Electronics</a></div></li>
  <li><div align="center">  <a href="productscategory4.php">Lighings</a></div></li>
   
  </div>
 

<li><div align="center"><a   href="viewservices.php">Services</a>	</div></li>
<li><div align="center"><a href="vieworders.php">Orders</a></div>	</li>
<li><div align="center"><a href="vieworderdetails.php">Order Details</a></div></li>
<li><div align="center"><a href="viewfeedback.php">Feedbacks</a></div>	</li>
 
</ul>
   
  

</div>
		  
   
			 		  
			 
			 
				  
				 
			 
		  <div class="section2_admin" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif' ;overflow-y: scroll" align="center;">
		  
  
	<h1 class="jumbotron" align="center">DashBoard</h1>
			  
			  
			   
			  <div align="center"style="padding: 5px">
			<div style="float:left">
			<h1  class="alert alert-success" align="center" style="width: 300px;height:150px">Total Sale Income - Rs. <?php echo   $average ?> /=</h1> 	
			</div>  
			  -
			 
			 <div style="float:left; margin-left: 15px">
			 <h1 class="alert alert-info" align="center" style="width: 300px ;height:150px">Total Sale Count - Qty <?php echo   $orders ?></h1> 		  
    		 </div>
			  
			  </div>
			  	<table class="table table-striped" align="center" style="margin-top: ">
  <thead>
    <tr>
		 
 		  <th class="hidden" scope="row">ID</th>
		  <th class="hidden" scope="row">Order ID</th>
		 <th  scope="row">Most Selling Items</th>
		  <th class="hidden" scope="row">Price</th>
		  <th class="hidden" scope="row">Quantity</th>
		<th class="hidden" width="100px" scope="row">Total</th>
		<th class="hidden" scope="row">Date</th>
    </tr>
  </thead>
  <tbody align="left">
	<?php 
 		while ($row= $result2->fetch_assoc()):  ?>  
	  
    <tr align="left">
      <td class="hidden"><?php echo $row['id']; ?> </td>
      <td class="hidden"><?php echo $row['order_id']; ?> </td>
	  <td><?php echo $row['product_name']; ?></td>
	  <td class="hidden"><?php echo $row['product_price']; ?></td>
	  <td class="hidden"><?php echo $row['product_quantity']; ?></td>
	  <td class="hidden" >Rs. <?php echo $row['product_quantity']*$row['product_price']; ?> /=</td>
	  <td class="hidden"><?php echo $row['date'] ; ?> </td>
    </tr>
  
  
    
  </tbody>


<?php endwhile; ?>
</table>
	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';

 	 }
 	 ?>
 	  
	
	
	
	
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	</div>
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
 	  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
		  </div>  
		  </div>
	
	

<footer class="footer-distributed">

				<div class="footer-left">

				<a><img src="photos/car care logo (2).jpg" alt="" width="300px" height=""  ></a>

				<p class="footer-links">
				 
					 
					
					 
					
				</p>

				<p class="footer-company-name">Car Care © 2021</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p>444 S. Cedros Ave Solana Beach, Colombo</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+94 0112 905 127</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="OZQ@company.com">CarCare@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					The thing is, I don’t want to be sold to when I walk into a Garage. I want to be welcomed.
– Ilma, Senior Vice President of Car Care PVT LTD.
				</p>
				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>

				</div>

			</div>

		</footer>
	
	
</div>	 	

 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>