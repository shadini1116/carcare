<?php   
  
 $connect = mysqli_connect("localhost", "root", "", "shopping_cart");  
?> 

	 <?php
	session_start();
	if(!isset($_SESSION['adminName']))
	
	{
		header("location: adminlogin.php");
	}
	$adminName=$_SESSION['adminName']; 
	$id=$_SESSION['id']; 
	$adminEmail=$_SESSION['adminEmail'];
	
 
	$mysqli = new mysqli('localhost','root','','shopping_cart') or die(mysqli_error($mysqli));
	$result  = $mysqli->query("SELECT * FROM tbl_sales") or die ($mysqli->erorr);	
	
	?>
	


<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Profile of <?php echo $adminName; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <link rel="shortcut icon" href="photos/1.PNG" type="image/x-icon" /> 


  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 228px;
  background-color: black;
}

li a {
  display: block;
  color: white;
  padding: 8px 16px;
  text-decoration: none;
	font-size: 20px;
}

li a.active {
  background-color: hotpink;
  color: white;
}

li a:hover:not(.active) {
  background-color: darkorchid;
  color: white;
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
	<body style="background-color: black" > 
<div id="loader"></div>
	

<div class="section2" align="center">
	
<img src="photos/logo.PNG" alt="Smiley face" width="500px" height="95px" style="vertical-align:middle">
	
<div align="right" style="margin-top: -50px"> 
<a class="btn btn-info" > <i class="fa fa-user-circle-o"></i> Admin <?php echo $adminName; ?>&nbsp;   </a>
<a class="btn btn-info" href="adminLogout.php">Log Out &nbsp;<i class="fa fa-sign-out"></i></a>  
</div>			

</div>	
	
  <div class="mainframe">
<div class="section1_admin">

<ul>
<li><div align="center"><a href="adminindex.php">Home</a></div></li>		
<li><div align="center"><a href="salesprediction.php">Sales Prediction</a></div></li>
<li><div align="center"><a class="active" href="salesupdate.php">Update Year Sales</a></div></li>		
<li><div align="center"><a href="customermanage.php">Customers</a></div></li>
<li><div align="center"><a href="gentswear.php">Gents</a>	</div></li>
<li><div align="center"><a href="ladieswear.php">Ladies</a>	</div></li>
<li><div align="center"><a href="kidswear.php">Kids</a>	</div></li>
<li><div align="center"><a href="accessories.php">Accessories</a>	</div></li>
<li><div align="center"><a href="vieworders.php">Orders</a></div>	</li>
<li><div align="center"><a href="vieworderdetails.php">Order Details</a></div></li>
<li><div align="center"><a href="viewfeedback.php">Feedback</a></div>	</li>
 
</ul>
   
  

</div>
		  
		  
		  <div class="section2_admin" style="font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif';font-size: 20px">
		  
			  
<!--
				<div align="left" class="col-sm-2" style="margin-top: 5px" >
     <button type="button"   data-toggle="modal" data-target="#model" class="btn btn-info btn-md"><i class="fa fa-plus"></i> &nbsp; Add Module Assignments</button>
-->
	
	<!-- insert model -->
<!--
	<div id="model" class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
   			 <div class="modal-content">
      			<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel1">Add Module Assignments </h5>
	<form method="post" action="admin_manage_assignments.php"  enctype="multipart/form-data"> 
    	 
    <button type="button" class="close" data-dismiss="modal">close</i></button>
 	<div class="modal-body">
  	<br>
	<input type="text" name="assignmnt_id" class="form-control" placeholder="Assignment ID" />
		<br> 	
		 <input type="text" name="batch_id"   class="form-control" placeholder="Batch ID" required/>
  	<br>  
     <input type="file" name="moduleassignment_1" class="form-control" placeholder="Assignment 1" />
    <br>
     <input type="file" name="moduleassignment_2" class="form-control" placeholder="Assignment 2" />
    <br>
     <input type="file" name="moduleassignment_3" class="form-control" placeholder="Assignment 3" />
    <br>
     <input type="file" name="moduleassignment_4" class="form-control" placeholder="Assignment 4" />
    <br> 
     <input type="file" name="moduleassignment_5" class="form-control" placeholder="Assignment 5" />
	<br> 
     <input type="file" name="moduleassignment_6" class="form-control" placeholder="Assignment 6" />
	<br>
     <input type="file" name="moduleassignment_7" class="form-control" placeholder="Assignment 7" />
    <br>
     <input type="file" name="moduleassignment_8" class="form-control" placeholder="Assignment 8" />
   <br> 
     <input type="file" name="moduleassignment_9" class="form-control" placeholder="Assignment 9" />
	<br> 
     <input type="file" name="moduleassignment_10" class="form-control" placeholder="Assignment 10" />
    </div>
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
-->
	<!-- update model --> 		  
	<div align="left" class="col-md-12" style="margin-top: 5px" >	
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Annual Sales Turnovers </h5>
		<form method="post" action="saleupdate_update.php"  enctype="multipart/form-data"> 	
			
			
       <button type="button" class="close" data-dismiss="modal">close</button>
		 
      </div> 

      <div class="modal-body">
    <input type="hidden" name="update_id" id="update_id" class="form-control" required/>
	 
	 
     
      <input type="text" name="id" id="id" class="form-control" placeholder="ID" readonly/>
    <br>
	 <input type="text" name="year2019" id="year2019" class="form-control" placeholder="2019" />
    <br>	  
     <input type="text" name="year2020" id="year2020" class="form-control" placeholder="2020" />
    <br>
     <input type="text" name="year2021" id="year2021" class="form-control" placeholder="2021" />
    <br>
     <input type="text" name="year2022" id="year2022" class="form-control" placeholder="2022"  />
    <br>
     <input type="text" name="year2023" id="year2023"  class="form-control" placeholder="2023" />
    <br> 
     <input type="text" name="year2024" id="year2024" class="form-control" placeholder="2024" />
	<br> 
     <input type="text" name="year2025" id="year2025" class="form-control" placeholder="2025" />
	<br>
     <input type="text" name="year2026" id="year2026" class="form-control" placeholder="2026"  />
    
		  
   <div class="modal-footer">                      	
   <button type="submit" value="submit" id="update_id" name="updatedata" class="btn btn-info">Update</button>                
   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	   
   	</div>
	</form>	
    </div>
  	</div>
	</div>			
    </div>		  
			  <hr>  
<h1 align="center">Sales Turnover</h1>
<table class="table" id="user-data">
  <thead>
    <tr> 
	  <th scope="col">ID</th>
	  <th scope="col">2019</th>
	  <th scope="col">2020</th>
      <th scope="col">2021</th>
	  <th scope="col">2022</th>
      <th scope="col">2023</th>
	  <th scope="col">2024</th>
      <th scope="col">2025</th>
	  <th scope="col">2026</th>
	  <th scope="col">Edit</th>
<!--	  <th scope="col">Delete</th>	-->
    </tr>
  </thead>
  <tbody>
	  <?php 
 		while ($row= $result->fetch_assoc()):  ?>  
	  
    <tr>
     	 <td><?php echo $row['id']; ?></td>
		 <td><?php echo $row['year2019']; ?></td>
		 <td><?php echo $row['year2020']; ?></td>
		 <td><?php echo $row['year2021']; ?></td>
		 <td><?php echo $row['year2022']; ?></td>
		 <td><?php echo $row['year2023']; ?></td>
		 <td><?php echo $row['year2024']; ?></td>
		 <td><?php echo $row['year2025']; ?></td>
	   	 <td><?php echo $row['year2026']; ?></td>
		 <td><button type="button" class="btn btn-danger btn-xs editbtn"><i class="fa fa-balance-scale" aria-hidden="true"></i></button></td>
<!-- 		 <td><a href="admin_manage_assignments.php?delete= <?php echo $row['id']; ?> " class="btn btn-danger btn-xs"><i class="fa fa-trash"></a></td>-->
		
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

				<a><img src="photos/logo.PNG" alt="" width="300px" height=""  ></a>

				<p class="footer-links">
				 
					 
					
					 
					
				</p>

				<p class="footer-company-name">Pentagon Online Shopping © 2020</p>
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
					<p><a href="OZQ@company.com">Pentagon@company.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					The thing is, I don’t want to be sold to when I walk into a store. I want to be welcomed.
– Ilma, Senior Vice President of Retail at Pentagon Shopping Cart Inc.
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
				$('#year2019').val(data[1]);
				$('#year2020').val(data[2]);
				$('#year2021').val(data[3]);
				$('#year2022').val(data[4]);
				$('#year2023').val(data[5]);
				$('#year2024').val(data[6]);
				$('#year2025').val(data[7]);
				$('#year2026').val(data[8]);
				
				
		});
	
	});
	
	
	</script>
 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>