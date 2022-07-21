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
	
	 
}

?>
	  
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Of <?php echo $name;?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 <link rel="shortcut icon" href="photos/car care logo (2).png" type="image/x-icon" /> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
img {
	border-radius: 50%;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column1, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
/*
img {
z-index: 2;
 position: absolute;
}
		 
*/
</style>
 </head>
<body style="background-color: white; margin-top: -20px" > 
<div id="loader"></div>
	

 
		
<div align="center">
	
	<div align="center" > 
  	
<div class="topnav"  style="margin-left:-10px">
<a><img  width="120px" src="photos/car care logo (2).png" > </a>	
<a class="active" href="myprofile.php">Customer <i class="fa fa-home" aria-hidden="true"></i>
 - <?php echo $name;?> </a>	
<a href="serviceyourcar.php">Service your Car <i class="fa fa-car" aria-hidden="true"></i></a>		
<a href="product.php">Order Body Parts <i class="fa fa-wrench" aria-hidden="true"></i>
</a>
<a href="myorders.php">Previous Order History</a>	
<a href="orderItems.php">Previous Order Items</a>	
<a href="userLogout.php">Log Out</a>
	 
</div>
	
</div>
	</div>
	
<div class="section3s2" style="background-color: white" >
		  <?php 
 		while ($row= $result->fetch_assoc()):   
	  
	  {
		$id = $row['CustomerID'];
	    $CustomerName =$row['CustomerName'];
		$Address =$row['Address'];
		$City =$row['City'];
		$PostalCode =$row['PostalCode'];
		$Country =$row['Country'];		
			$Email =$row['Email'];		  
		$password =$row['password'];
		  $image =$row['image'];
	  }
	 ?> 
	  
 
<div class="container">
  <div style="text-align:center">
    <h2 class="jumbotron">My Profile <hr>  <img src="images/<?php echo $image ; ?> " alt="Update your Image"  width="150px" height="150px" ></h2>
    <p> </p>
  </div>
   
	
	<table class="table table-hover" style="margin-top: ">
   <thead >
    <tr>
		 <th scope="col"> My ID</th>	
		<th scope="col"> My Name</th>	
		<th scope="col">  Address</th>
     	<th scope="col"> City</th>
		<th  scope="col">Postal Code</th>
		<th  scope="col">Country</th>
 	   <th  scope="col">Email</th>
		<th  scope="col">Password</th>
		<th  scope="col">image</th>
		 <th  scope="col">Action</th>
		 
    </tr>
  </thead>
  <tbody>
	  
	  
 
	   <tr>
	      <td><?php echo $id ?></td>
     <td><?php echo $CustomerName ?></td>
	 <td><?php echo $Address ?></td>
	 <td><?php echo $City ?></td>
     <td><?php echo $PostalCode ?></td>
	 <td><?php echo $Country ?></td>	   
     <td><?php echo $Email ?></td>   
     <td><?php echo $password ?></td>
		    <td><?php echo $image ?></td>
	 <td><button type="button" class="btn btn-primary btn-xl editbtn">Update Details</button></td>
 

    </tr>
  </tbody>
 <?php endwhile; ?> 
</table>

 
	<a href="myreviews.php"><button class="btn btn-success" > Add Your Review </button></a>
	
	 <div align="left" class="col-md-12" style="margin-top: 5px" >	
	
	<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">  
		<form method="post" action="updateprofile.php"  enctype="multipart/form-data"> 	
       <button type="button" class="close" data-dismiss="modal"> close</button> 
      </div>   
      <div class="modal-body">  
		  
<input type="hidden" name="update_id" id="update_id" class="form-control"  readonly/>	
		  
<input  type="text" name="id" id="id" class="form-control"  readonly/>		  
<br> 		  
<input type="text" name="CustomerName" id="CustomerName" placeholder="Customer Name" class="form-control"  />		  
<br> 		  
<input type="text" name="Address" id="Address" class="form-control" placeholder="Address"  />		  
 <br>		  
<input type="text" name="City" id="City" class="form-control" placeholder="City"  />		  
<br>			  
<input type="text" name="PostalCode" id="PostalCode" class="form-control" placeholder=" PostalCode"/>		  
<br>	
<input type="text" name="country" id="country" class="form-control" placeholder="Country"/>		  
<br>			  
<input  type="text" name="email" id="email" class="form-control" placeholder="Email"/>		  
<br>	  
<input type="text" name="password" id="password" class="form-control" placeholder="Password"/>
	<br>	  
<input type="file" name="image" id="image" class="form-control" placeholder="Image"/>
		  	  
  </div>
      <div class="modal-footer">
                          	
     <button type="submit" value="submit" id="book" name="updatedata" class="btn btn-info"> Update Details </button>
                   
       <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>                  
		 
      </div>
		</form>	
    </div>
  </div>
</div>			
    </div>
	
	
	
	
	
	
	
	
	
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
				$('#id').val(data[0]);
				$('#CustomerName').val(data[1]);
				$('#Address').val(data[2]);
				$('#City').val(data[3]);
				$('#PostalCode').val(data[4]);
				$('#country').val(data[5]);
				$('#email').val(data[6]);
				$('#password').val(data[7]);
				$('#image').val(data[8]);
		});
	
	});
 
</script>
	 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/gallery.js"></script>
  </body>
</html>