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
	$result =  $mysqli->query("SELECT * FROM tbl_customer")or die ($mysqli->erorr);	
	
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
  background-color: rgba(160,160,160,1.00);
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
	<body  > 
<div id="loader"></div>
	

<div class="section2" align="center"  >
	
<img src="photos/car care logo (2).png" alt="Smiley face" width="400px"  style="vertical-align:middle">
	
<div align="right" style="margin-top: -50px"> 
<a class="btn  " style="background-color: mediumvioletred; color: white"  > <i class="fa fa-user-circle-o"></i> Admin <?php echo $name; ?>&nbsp;   </a>
<a class="btn " style="background-color: mediumvioletred; color: white"  href="adminLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  
</div>			

</div>	
	
  <div class="mainframe" style="background-color: rgba(160,160,160,1.00)">
<div class="section1_admin"  >

<ul>
<li><div align="center"><a  href="adminindex.php">Home</a></div></li>		
<li><div align="center"><a href="sales.php">Sales Reports</a></div></li>	
<li><div align="center"><a class="active" href="customermanage.php">Customers</a></div></li>
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
<li><div align="center"><a href="viewfeedback.php">Feedbacks</a></div>	</li>
 
</ul>
   
  

</div>
		  
		  
		  <div align="center" class="section2_admin" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 14px; overflow: scroll">
		  
			  
			 
   <div align="center" >   <button type="button" style="margin: 5px"     data-toggle="modal" data-target="#model" class="btn btn-primary btn-md"><i  class="fa fa-plus-circle"></i> &nbsp; Add Customers</button></d>
			  
			  
			  
					<?php	
   
if(isset($_POST['submit2']))
{	
$search = $mysqli->real_escape_string($_POST['search']);	
$result = $mysqli->query("SELECT *  FROM tbl_customer WHERE City = '$search'") ; 
}	 
?>	
			  <table align="center">
<form method="POST" class="form">
<th> <input type="text" name="search" class="form-control" width="100px">	  </th> 
<th><input type="submit" class="btn btn-primary" value="Search By City" name="submit2" class="form-group"></th>
</form>
			  </table>
	
	<!-- insert model -->
	<div id="model" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
   			 <div class="modal-content">
      			<div class="modal-header">
        		<h4 class="modal-title" id="exampleModalLabel1">Add Customers</h4>
					
				    <button type="button" class="close" data-dismiss="modal">close</i></button>	
				 
				 <hr>
	<form method="post" action="customermanage_manage.php"  enctype="multipart/form-data"> 
    	 
 
					
 	<div class="modal-body">  	  
		
		
	<input type="text" name="CustomerID" class="form-control" placeholder="CustomerID" required/>
  	<br>  
     <input type="text" name="CustomerName" class="form-control" placeholder="Customer Name" required/>
    <br>
     <input type="text" name="Address" class="form-control" placeholder="Address" required/>
    <br>
     <input type="text" name="City" class="form-control" placeholder="City" required/>
    <br>
     <input type="text" name="PostalCode" class="form-control" placeholder="PostalCode" required/>
    <br> 
     <input type="text" name="Country" class="form-control" placeholder="Country" required/>
	<br> 
     <input type="email" name="Email" class="form-control" placeholder="Email" required/>
	<br>
     <input type="text" name="password" class="form-control" placeholder="Password" required />
   
    <div class="modal-footer">
     
	 <button type="submit" name="submit"  class="btn btn-success"/>Insert Data</button>
     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
		
    </div>
   </div>
  </form>
 </div>
</div> 		  
</div>		
		
    </div>
	<!-- update model --> 		  
	<div align="left" class="col-md-12" style="margin-top: 5px" >	
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Customers</h5>
		<form method="post" action="customermanage_update.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal">close</button>
		 
      </div> 

      <div class="modal-body">
		  
		  
    <input type="hidden" name="update_id" id="update_id" class="form-control" required/>


      <input type="text" name="CustomerID" id="CustomerID" class="form-control" placeholder="CustomerID" readonly/>
    <br>
	 <input type="text" name="CustomerName" id="CustomerName" class="form-control" placeholder="Customer Name" />
    <br>	  
     <input type="text" name="Address" id="Address" class="form-control" placeholder="Address" />
    <br>
     <input type="text" name="City" id="City" class="form-control" placeholder="City" />
    <br>
     <input type="text" name="PostalCode" id="PostalCode" class="form-control" placeholder="PostalCode"  />
    <br>
     <input type="text" name="Country" id="Country"  class="form-control" placeholder="Country" />
    <br> 
     <input type="text" name="Email" id="Email" class="form-control" placeholder="Email" />
	<br> 
     <input type="text" name="password" id="password" class="form-control" placeholder="Password" />
	 
		  
   <div class="modal-footer">                      	
   <button type="submit" value="submit" id="update_id" name="updatedata" class="btn btn-info">Update</button>                
   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	   
   	</div>
	</form>	
    </div>
  	</div>
	</div>			
    </div>		  
		 						 
     
		
<h1 class="jumbotron" align="center">Customers</h1>
<table class="table table-striped table-hover" id="user-data">
  <thead>
    <tr> 
	  <th scope="span">ID</th>
	  <th scope="col">Name</th>
	  <th scope="col">Address</th>
      <th scope="col">City</th>
	  <th scope="col">PostalCode</th>
      <th scope="col">Country</th>
	  <th scope="col">Email</th>
      <th scope="col">password</th>
	 
	  <th scope="col">Edit</th>
	  <th scope="col">Delete</th>	
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
     	 <td><?php echo $row['CustomerID']; ?></td>
		 <td><?php echo $row['CustomerName']; ?></td>
		 <td><?php echo $row['Address']; ?></td>
		 <td><?php echo $row['City']; ?></td>
		 <td><?php echo $row['PostalCode']; ?></td>
		 <td><?php echo $row['Country']; ?></td>
		 <td><?php echo $row['Email']; ?></td>
		 <td><?php echo $row['password']; ?></td>
	   	  
		 <td><button type="button" class="btn btn-info btn-xs editbtn"><i class="fa fa-edit" aria-hidden="true"></i></button></td>
 		 <td><a href="customermanage_manage.php?delete= <?php echo $row['CustomerID']; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>
		
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
	  

  <script>
		$(document).ready(function() {
			
			$('.editbtn').on('click', function(){
							 
			$('#editmodal').modal('show');				 
		
				
			$tr = $(this).closest('tr');
				
			var data = $tr.children("td").map(function(){
				
				return $(this).text();
			}).get();	
				
			console.log(data);
				
				$('#update_id').val(data[0]);
				$('#CustomerID').val(data[0]);
				$('#CustomerName').val(data[1]);
				$('#Address').val(data[2]);
				$('#City').val(data[3]);
				$('#PostalCode').val(data[4]);
				$('#Country').val(data[5]);
				$('#Email').val(data[6]);
				$('#password').val(data[7]);
		 		
		});
	
	});
	
	
	</script>
 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>