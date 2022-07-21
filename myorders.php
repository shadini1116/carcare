<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "carcare");  
include "DBconnection.php";  
if(!isset($_SESSION['name']))
{
	header("location:product.php");
}
else
	{
		$name=$_SESSION['name'];
		$id = $_SESSION["id"];
	 
		
		$result = mysqli_query($conn,"SELECT * FROM tbl_customer WHERE CustomerID='" . $id."'");
		$row  = mysqli_fetch_array($result);
		
		if($row >0)
		{
		$CustomerName =$row['CustomerName'];
		$Address =$row['Address'];
		$City =$row['City'];
		$PostalCode =$row['PostalCode'];
		$Country =$row['Country'];		
		$password =$row['password'];

		$id = $_SESSION['id'];		
	 	}
		if($row >0)
		{	
		$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));	
		$result =  $mysqli->query("SELECT * FROM tbl_order WHERE customer_id ='" . $id."'")or die ($mysqli->erorr);	
	
			 
	$id = $_SESSION['id'];	 
		$oid= $_SESSION['order_id'];
		}
	}

 
?>
	  
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Of <?php echo $CustomerName;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 <link rel="shortcut icon" href="photos/car care logo (2).png" type="image/x-icon" /> 



	 <style>



/* Style inputs */
.input1[type=text], select, textarea {
  width: 100%;
  padding: 3px;
  border: 1px solid #ccc;
  margin-top: 3px;
  margin-bottom: 8px;
  resize: vertical;
}

.input1[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 3px 5px;
  border: none;
  cursor: pointer;
}

.input1[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */


/* Create two columns that float next to eachother */
.column1 {
  float: left;
  width: 50%;
  margin-top: 2px;
  padding: 10px;
font-size: 15px;	
}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
	font-size: 15px;	
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column1, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
 </head>
	<body style="background-color: white;margin-top: -20px" > 
 
	
	
<div align="center">
	
	<div align="center" > 
  	
<div class="topnav"  style="margin-left:-10px">
<a><img  width="120px" src="photos/car care logo (2).png" > </a>	
<a   href="myprofile.php">Customer <i class="fa fa-home" aria-hidden="true"></i>
 - <?php echo $name;?></a>	
<a href="serviceyourcar.php">ervice your Car <i class="fa fa-car" aria-hidden="true"></i>
</a>		
<a href="product.php">Order Body Parts <i class="fa fa-wrench" aria-hidden="true"></i>
</a>
<a class="active" href="myorders.php">Previous Order History</a>	
<a href="orderItems.php">Previous Order Items</a>	
<a href="userLogout.php">Log Out</a>
	 
</div>
	
</div>
	</div>
	
<div class="section3s2" style="background-color: white" >
	
	
<div class="container">
  <div style="text-align:center">
    <h2 class="jumbotron">Orders List</h2>
    <p> </p>
  </div>
   
	
	<table class="table table-striped" align="center" style="margin-top: ">
  <thead>
    <tr>
 		  <th scope="row">Order ID</th>
		  <th scope="row">My ID</th>
		  <th scope="row">Date</th>
		  <th scope="row">Order Status</th>
    </tr>
  </thead>
  <tbody align="center">
	<?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
      <td><?php echo $row['order_id']; ?> </td>
      <td><?php echo $row['customer_id']; ?> </td>
	  <td><?php echo $row['creation_date']; ?></td>
	  <td><?php echo $row['order_status']; ?></td>
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
	
	
		<div class="section4">
	
	<section class="intro">
      <div class="left">
        <div>
          <span style="font-size: 40px; color: black">Contact Us</span>
          <h1></h1>
          <p style="color: mediumvioletred">
<br>
Address: Royal Thai Consulate General New No:3 (Dld No:2),<br>
First Main Road Vidyodaya Colony, T. Nagar,<br>
Chennai 600017 (Landmark: Near Rajan Eye Care Hospital) <br>
Tel:00 91 44 4230 0790 , 00 91 44 2447-1617<br>
Fax 00 91 44 4202 09 00 
</p>
          
        </div>
      </div>

      <div class="slider" style="margin-top:10PX ">
       <div class="mapouter"><div class="gmap_canvas"><iframe width="800" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=colombo&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://speed-test-internet.com">speed-test-internet.com</a></div><style>.mapouter{position:relative;text-align:right;height:400px;width:800px;}.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:800px;}</style></div>
         

       
      </div>
	</section>
	
	
	
	
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
	<script src="js/gallery.js"></script>
  </body>
</html>