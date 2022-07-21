<?php

$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));	


if (isset($_GET['delete'])) {
 
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM appointments WHERE id= $id") or die ($mysqli->error());
      
      header("location:serviceyourcar.php");
}


?>