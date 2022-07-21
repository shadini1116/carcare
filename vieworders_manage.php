<?php

$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));

 

 

if (isset($_GET['delete'])) {
	$order_id = $_GET['delete'];
	$mysqli->query("DELETE FROM tbl_order WHERE order_id=$order_id") or die ($mysqli->error());
    $mysqli->query("DELETE FROM tbl_order_details WHERE order_id=$order_id") or die ($mysqli->error());  
	
      header("location:vieworders.php");
}

if (isset($_GET['up'])) {
	$order_id = $_GET['up'];
	$resultSet = $mysqli->query("SELECT item_id, product_quantity from tbl_order_details where order_id = $order_id");
	while($row = mysqli_fetch_array($resultSet)){

	if($row["item_id"]<100){
	$mysqli->query("UPDATE batteries set qty = qty-'".$row["product_quantity"]."' WHERE id= '".$row["item_id"]."'  ") or die ($mysqli->error());
	
	}elseif ($row["item_id"]<1000) {
		$mysqli->query("UPDATE spareparts set qty = qty-'".$row["product_quantity"]."' WHERE id= '".$row["item_id"]."'  ") or die ($mysqli->error());
	}elseif ($row["item_id"]<10000) {
		$mysqli->query("UPDATE lightings set qty = qty-'".$row["product_quantity"]."' WHERE id= '".$row["item_id"]."'  ") or die ($mysqli->error());
	}else{
		$mysqli->query("UPDATE electronics set qty = qty-'".$row["product_quantity"]."' WHERE id= '".$row["item_id"]."'  ") or die ($mysqli->error());
	}

	}
	$mysqli->query("UPDATE tbl_order set order_status = 'Order Confirmed' WHERE order_id= $order_id  ") or die ($mysqli->error());
    // $mysqli->query("DELETE FROM tbl_order_details WHERE order_id=$order_id") or die ($mysqli->error());  
	
      header("location:vieworders.php");
}



?>
 
