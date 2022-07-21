<?php
 
	include "DBconnection.php";
	if (isset($_POST['updatedata']))
 {
	   
		
		$update_id = $_POST['update_id']; 
		$id = $_POST['id']; 
		$timeslot = $_POST['timeslot'];
		$servicestatus = $_POST['servicestatus'];
		$billstatus = $_POST['billstatus'];
		 
	 
   		$query = "UPDATE appointments SET timeslot='$timeslot',servicestatus='$servicestatus',billstatus='$billstatus'  WHERE id = $update_id ";
		$query_run = mysqli_query($conn, $query);
		
		
	if($query_run)
	{	
	echo "submitted";	
    header('location:viewservices.php') ;     	
	}
	else
	{
	echo "form not submitted";
	}               
}
?>