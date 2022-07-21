<?php
 
	include "DBconnection.php";
	if (isset($_POST['updatedata']))
		
	$targetDir = "images/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

 {
		$update_id = $_POST['update_id']; 
		$id = $_POST['id'];
		$name = $_POST['name'];
	    $category = $_POST['category'];
	 	$details = $_POST['details'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		 
	move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);

   		$query = "UPDATE lightings SET name='$name',category='$category', image='$image', price='$price', details='$details', qty='$quantity'  WHERE id = $update_id ";
		$query_run = mysqli_query($conn, $query);
		
		
	if($query_run)
	{	
	echo "submitted";	
    header('location:productscategory4.php') ;     	
	}
	else
	{
	echo "form not submitted";
	}               
}
?>