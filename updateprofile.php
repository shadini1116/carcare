<?php
	include "DBconnection.php";

if (isset($_POST['updatedata']))
$targetDir = "images/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


{
	 
	$id = $_POST['update_id'];
	
	
		 
	
	
		$id=$_POST['id']; 
		$CustomerName = $_POST['CustomerName'];
	 	$Address = $_POST['Address'];
		$City = $_POST['City'];
		$PostalCode = $_POST['PostalCode'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$password = $_POST['password'];	
	move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
 	 
   $query = "UPDATE tbl_customer SET CustomerName='$CustomerName', Address='$Address', City='$City', PostalCode='$PostalCode', country='$country', email='$email', password='$password', image='$image' WHERE CustomerID = $id " ;
 
$query_run = mysqli_query($conn, $query);
 
	if($query_run)
	{	
	echo "submitted";	
   header('location:myprofile.php') ;     	
	}
	else
	{
		echo "form not submitted";
	}
	               
}


?>

 