<?php
 
	include "DBconnection.php";
	if (isset($_POST['updatedata']))
 {

		$update_id = $_POST['update_id']; 
		$CustomerID = $_POST['CustomerID']; 
		$CustomerName = $_POST['CustomerName'];
		$Address = $_POST['Address'];
		$City = $_POST['City'];
		$PostalCode = $_POST['PostalCode'];
		$Country = $_POST['Country'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
	 

   		$query = "UPDATE tbl_customer SET CustomerName='$CustomerName', Address='$Address', City='$City', PostalCode='$PostalCode', Country='$Country', Email='$Email', password='$password' WHERE CustomerID = $update_id ";
		$query_run = mysqli_query($conn, $query);
		
		
	if($query_run)
	{	
	echo "submitted";	
    header('location:customermanage.php') ;     	
	}
	else
	{
	echo "form not submitted";
	}               
}
?>