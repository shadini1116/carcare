<?php
 
	include "DBconnection.php";
	if (isset($_POST['updatedata']))
 {
	   
		
		$update_id = $_POST['update_id']; 
		$id = $_POST['id']; 
		$order_id = $_POST['order_id'];
		$product_name = $_POST['product_name'];
		$product_price = $_POST['product_price'];
		$product_quantity = $_POST['product_quantity'];
		$date = $_POST['date'];
	 
   		$query = "UPDATE tbl_order_details SET product_quantity='$product_quantity' WHERE id = $update_id ";
		$query_run = mysqli_query($conn, $query);
		
		
	if($query_run)
	{	
	echo "submitted";	
    header('location:vieworderdetails.php') ;     	
	}
	else
	{
	echo "form not submitted";
	}               
}
?>