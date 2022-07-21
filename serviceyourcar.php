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
	
	
	$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));	
	$result =  $mysqli->query("SELECT * FROM packages")or die ($mysqli->erorr);	
	
	$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));	
	$result2 =  $mysqli->query("SELECT * FROM appointments WHERE customerid ='" . $id."'")or die ($mysqli->erorr);	
}

?>
	  
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Of <?php echo $name ; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 <link rel="shortcut icon" href="photos/car care logo (2).png" type="image/x-icon" /> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	  <style>
	
#register .container #register-row #register-column #register-box {
  margin-top:0px;
  max-width: 700px;
  height:500px;
  color: black;
	 
	align: left;
	 
}
#register .container #register-row #register-column #register-box #register-form {
/*  padding: 1px;*/
  text-align: left;
}
#register .container #register-row #register-column #register-box #register-form #register-link {
/* margin-top: px;*/
text-align: left;
color: black;

}
        
  
	 </style>
 </head>
<body style="background-color: white; margin-top: -20px; overflow-x: hidden" > 
 
		
<div align="center">
	
	<div align="center" > 
  	
<div class="topnav"  style="margin-left:-10px">
<a><img  width="120px" src="photos/car care logo (2).png" > </a>	
<a   href="myprofile.php">Customer <i class="fa fa-home" aria-hidden="true"></i>
 - <?php echo $name;?> </a>	
<a class="active" href="serviceyourcar.php">Service your Car <i class="fa fa-car" aria-hidden="true"></i></a>		
<a href="product.php">Order Body Parts <i class="fa fa-wrench" aria-hidden="true"></i>
</a>
<a href="myorders.php">Previous Order History</a>	
<a href="orderItems.php">Previous Order Items</a>	
<a href="userLogout.php">Log Out</a>
	 
</div>
	
</div>
	</div>
	<div class="section3s2" style="background-color: white" >
<div align="center"  style="background-color: white; width: 50%; float: left;border-right: solid" >
	
<h1 class="jumbotron">Our Packages</h1>
<table align="center" class="table table-hover" style="margin-top: ">
<thead >
    <tr>
		<th >ID</th>	
		<th scope="span">Name</th>	
		<th scope="span">Details</th>
     	<th scope="span">Amount</th> 
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):   
	  
	  {
		$pid = $row['id'];
	    $pName =$row['package_name'];
		$pdetails =$row['package_details'];
		$pamount =$row['package_amount']; 
	  }
	 ?> 
	  
	 <tr>
	 <td><?php echo $pid ?></td>
     <td><?php echo $pName ?></td>
	 <td><?php echo $pdetails ?></td>
	 <td><?php echo $pamount ?></td>
    </tr>
  </tbody>
	
 <?php endwhile; ?> 
</table>
 

	</div>
	<div   style="background-color: white; width: 50%; float: right" >
	
 <h1 class="jumbotron">Service Your Car</h1>

		
	<div id="register">
            <div class="container" >
            <div id="register-row"  align="left">
                <div id="register-column">
                    <div id="register-box">
                        
                        
                        <form id="register-form" class="form" action="appointmentinsert.php" method="post">
                           
                            
                         <?php 
			  
$result= mysqli_query($conn,"SELECT * FROM packages");
$row  = mysqli_fetch_array($result);

echo "<select name='Package'>";
echo "<option>Select a Package</option>";
while ($row = mysqli_fetch_array($result)) 
{
echo "<option value='" . $row['package_amount'] . "'>" . $row['package_name'] . "</option>";
}
echo "</select>";
	
	?>
							
							 <div class="form-group">
                              <label>Vehical Type</label>
                               <input type="text" id="Vehicaltype" class="form-control" name="Vehicaltype" placeholder="Vehical Type " required>
                            </div>
							
							<div class="form-group">
                               <label>Vehical Number</label>
                                <input type="text" id="Vehicalnumber" class="form-control" name="Vehicalnumber" placeholder="Vehical Number" required>
                            </div>
							
							<div class="form-group">
                               <label>Date</label>
                                <input type="date" id="date" class="form-control" name="date" placeholder=" Postal Code" required>
                            </div>
						 
							<div class="form-group">
                           
                                <input type="submit" name="submit" class="btn btn-success btn-block" value="Submit Service Appointment Request" >

                            </div>
            
                        </form>
                     <h2 class="alert alert-info">Your Time Slot is below in service records</h2>
                </div>
            </div>
        </div>
    </div> 


	
	</div>	
	
	</div>
	</div>
 	<div class="section3s2" style="background-color: white" >
 
	
<h1 class="jumbotron">Service Records</h1>
<table align="center" class="table table-hover" style="margin-top: ">
<thead >
    <tr>
		<th >ID</th>	
		<th scope="span">My ID</th>	
		<th scope="span">Name</th>
     	<th scope="span">Email</th> 
		<th scope="span">Package</th>	
		<th scope="span">Vehical</th>
     	<th scope="span">Number</th>
		<th scope="span">Date</th> 
		<th scope="span">Time</th> 
		<th scope="span">Service</th> 
		<th scope="span">Bill</th> 
		<th scope="span">Cancel</th> 
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result2->fetch_assoc()):   
	  
	  {
		$cid = $row['id'];
	    $customerid =$row['customerid'];
		$name =$row['name'];
		$email =$row['email']; 
		$package = $row['package'];
	    $vehicaltype =$row['vehicaltype'];
		$Vehicalnumber =$row['Vehicalnumber'];
		$date =$row['date'];   
		$timeslot =$row['timeslot'];
		$servicestatus =$row['servicestatus'];
		$billstatus =$row['billstatus'];     
	  }
	 ?> 
	  
	 <tr>
	 <td><?php echo $cid ?></td>
     <td><?php echo $customerid ?></td>
	 <td><?php echo $name ?></td>
	 <td><?php echo $email ?></td>
	 <td><?php echo $package ?></td>
     <td><?php echo $vehicaltype ?></td>
	 <td><?php echo $Vehicalnumber ?></td>
	 <td><?php echo $date ?></td>
	<td><?php echo $timeslot ?></td>
	 <td><?php echo $servicestatus ?></td>
	 <td><?php echo $billstatus ?></td>
	 	<td><a href="appointment_delete.php?delete=<?php echo $row['id']; ?> " class="btn btn-danger btn-sm"><i class="fa fa-trash"></a></td>	 
    </tr>
  </tbody>
	
 <?php endwhile; ?> 
</table>
 

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
	  	
		});
	
	});
 
</script>
	 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
	<script src="js/gallery.js"></script>
  </body>
</html>