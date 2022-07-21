<?php

$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));


$targetDir = "images/";
$image = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $image;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
 
if (isset($_POST['submit'])){
	
		 
 
		$name = $_POST['name'];
 	$category = $_POST['category'];
		$price = $_POST['price'];
		$details = $_POST['details'];
		$quantity = $_POST['quantity'];
	
 move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
         
	$mysqli->query("INSERT INTO lightings (name, category, image, price, details,qty) VALUES('$name','$category','$image','$price','$details','$quantity')") or die($mysqli->error);
	header("location:productscategory4.php");
	
 
	
}
 

if (isset($_GET['delete'])) {
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM lightings WHERE id=$id") or die ($mysqli->error());
      
      header("location:productscategory4.php");
}



?>
 
