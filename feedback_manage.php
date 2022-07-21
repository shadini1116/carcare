<?php

$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));

 

 

if (isset($_GET['delete'])) {
	$feedbackID = $_GET['delete'];
	$mysqli->query("DELETE FROM tbl_feedback WHERE feedbackID=$feedbackID") or die ($mysqli->error());
      
      header("location:viewfeedback.php");
}



?>
 
