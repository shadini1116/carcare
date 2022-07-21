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
	$result  = $mysqli->query("select  * from tbl_order_details where date between '2022-01-01' and '2022-12-31' ;") or die ($mysqli->erorr);	
	
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


 
 <?php
$conn = mysqli_connect("localhost", "root", "", "carcare");  
$result= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as d  FROM tbl_order_details where date between '2022-12-01' and '2022-12-31' ;");
$row = mysqli_fetch_array($result); 
$d = $row['d'] ;
  
$result2= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as n  FROM tbl_order_details where date between '2022-11-01' and '2022-11-31' ;");
$row = mysqli_fetch_array($result2); 
$n = $row['n'] ;

$result3= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as o  FROM tbl_order_details where date between '2022-10-01' and '2022-10-31' ;");
$row = mysqli_fetch_array($result3); 
$o = $row['o'] ;	
	 
$result4= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as s  FROM tbl_order_details where date between '2022-09-01' and '2022-09-31' ;");
$row = mysqli_fetch_array($result4); 
$s = $row['s'] ;	
	 
	 $result5= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as a  FROM tbl_order_details where date between '2022-08-01' and '2022-08-31' ;");
$row = mysqli_fetch_array($result5); 
$a = $row['a'] ;
	 
	  $result6= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as jul  FROM tbl_order_details where date between '2022-07-01' and '2022-07-31' ;");
$row = mysqli_fetch_array($result6); 
$jul = $row['jul'] ;
	 
 $result7= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as jun  FROM tbl_order_details where date between '2022-06-01' and '2022-06-31' ;");
$row = mysqli_fetch_array($result7); 
$jun = $row['jun'] ;
	 
$result8= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as may  FROM tbl_order_details where date between '2022-05-01' and '2022-05-31' ;");
$row = mysqli_fetch_array($result8); 
$may = $row['may'] ;	 
	 
$result9= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as april  FROM tbl_order_details where date between '2022-04-01' and '2022-04-31' ;");
$row = mysqli_fetch_array($result9); 
$april = $row['april'] ;	
	 
	 $result10= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as m  FROM tbl_order_details where date between '2022-03-01' and '2022-03-31' ;");
$row = mysqli_fetch_array($result10); 
$m = $row['m'] ;	
	 
	  $result11= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as f  FROM tbl_order_details where date between '2022-02-01' and '2022-02-31' ;");
$row = mysqli_fetch_array($result11); 
$f = $row['f'] ;	
	 
	  $result12= mysqli_query($conn,"SELECT SUM(product_price*product_quantity) as j  FROM tbl_order_details where date between '2022-01-01' and '2022-01-31' ;");
$row = mysqli_fetch_array($result12); 
$j = $row['j'] ;	
 ?>
	  
	 
  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 228px;
  background-color:rgba(160,160,160,1.00) ";
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
	<body style="background-color: rgba(160,160,160,1.00) " > 
<div id="loader"></div>
	

<div class="section2" align="center" style="background-color: rgba(160,160,160,1.00) ">
	
<img src="photos/car care logo (2).png" alt="Smiley face" width="400px"  style="vertical-align:middle">
	
<div align="right" style="margin-top: -50px"> 
<a class="btn  " style="background-color: mediumvioletred; color: white"  > <i class="fa fa-user-circle-o"></i> Admin <?php echo $name; ?>&nbsp;   </a>
<a class="btn " style="background-color: mediumvioletred; color: white"  href="adminLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  
</div>			

</div>	
	
  <div class="mainframe"   >
<div class="section1_admin"  >

<ul>
<li><div align="center"><a  href="adminindex.php">Home</a></div></li>		
<li><div align="center"><a class="active" href="sales.php">Sales Reports</a></div></li>	
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
<li><div align="center"><a   href="vieworderdetails.php">Order Details</a></div></li>
<li><div align="center"><a   href="viewfeedback.php">Feedbacks</a></div>	</li>
 
</ul>
   
  

</div>
		  
		  
		  
		  <div class="section2_admin" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 14px; overflow: scroll">
		  
 
			  
<div id="chartContainer" style="height: 370px; width: 100%;margin-top: 45px"></div>
 
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
	  
 
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1",// "light2", "light2", "dark1", "dark2"
	title:{
		text: "Monthly Sales Chart"
	},
	axisY: {
		title: "Sales Turn Over ($)"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "red",
		legendText: "Year",
		dataPoints: [
			// { y:  <?php echo   $j ?> , label: "JAN" },
			{ y:  <?php echo   $f ?> , label: "FEB" },
			// { y:  <?php echo   $m ?>, label: "MARCH" },
			// { y:    <?php echo   $april ?>, label: "April" },
			// { y: <?php echo   $may ?>,  label: "May" },
			// { y:  <?php echo   $jun ?>,  label: "JUNE" },
			// { y: <?php echo   $jul ?>,  label: "JULY" },
			// { y: <?php echo   $a ?>,  label: "AUG" }, 
			// { y:  <?php echo   $s ?>,  label: "SEP" },  
			// { y:  <?php echo   $o ?>,  label: "OCT" },  
			// { y: <?php echo   $n ?>,  label: "NOV" },  
			// { y:  <?php echo   $d ?>, label: "DEC" },  
		]
	}]
});
chart.render();

}
</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>