<?php

$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));

 
if (isset($_POST['submit'])){

	    $CustomerID = $_POST['CustomerID']; 
		$CustomerName = $_POST['CustomerName'];
		$Address = $_POST['Address'];
		$City = $_POST['City'];
		$PostalCode = $_POST['PostalCode'];
		$Country = $_POST['Country'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
	 
 
         
	$mysqli->query("INSERT INTO tbl_customer(CustomerID, CustomerName, Address, City, PostalCode, Country, Email, password) VALUES('$CustomerID','$CustomerName','$Address','$City','$PostalCode','$Country','$Email','$password')") or die($mysqli->error);
	
	header("location:customermanage.php");

}
 

if (isset($_GET['delete'])) {
	$CustomerID = $_GET['delete'];
	$mysqli->query("DELETE FROM tbl_customer WHERE CustomerID=$CustomerID") or die ($mysqli->error());
      
      header("location:customermanage.php");
}



?>
 
