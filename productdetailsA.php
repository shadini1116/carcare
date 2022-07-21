<?php   
 session_start();  
$connect = mysqli_connect("localhost", "root", "", "carcare"); 
include "DBconnection.php";
 ?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $pname ; ?></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 
	 <link rel="shortcut icon" href="photos/car care logo (2).png" type="image/x-icon" /> 


	<?php 
		$id = $_GET['id'];
	
 	
	$result = mysqli_query($conn,"SELECT * FROM lightings WHERE id='" . $id."'");
	$row= $result->fetch_assoc();
	 
 
   	  $pid = $row['id']; 
	  $image = $row['image']; 
	  $pname = $row['name'];
	 $pcategory = $row['category'];
	  $price = $row['price']; 
	 $details = $row['details']; 
	 
	 
	?>

 </head>
	<body style="background-color: white;margin-top: -20px" > 
 
	
 
	
	
<div align="center">
	
	<div align="center"> 
<div class="topnav" style="margin-left:0px" >

  <a class="active "  href="product4.php">Back</a>
 
	
	
 	
	
</div>
	
</div>
	</div>
 <div class="container single-product" style="margin-top: -20px">
    <div class="row">
        <div class="col-2">
			  <h1><?php echo $pname ; ?></h1>
			 <h2><?php echo $pcategory ; ?></h2>
          <img src="images/<?php echo $image ; ?>"  width="300px" height="300px" >
        </div>
        <div class="col-2">
           
<!--            <h4><?php echo $pid ; ?></h1>-->
           
			<h2>Rs. <?php echo $price ; ?></h2>
            
            <h2>Product Details</h2>
			<br>
            <p style="font-size: 20px; font-family: 'Gill Sans', 'Gill Sans MT', 'Myriad Pro', 'DejaVu Sans Condensed', Helvetica, Arial, 'sans-serif'"><?php echo $details ; ?></p>
        </div>
    </div>
</div>


 
 
		
	 
 
</body>
</html>