
<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "carcare");  
include "DBconnection.php";  
if(!isset($_SESSION['name']))
{
	header("location:product.php");
}
else
	{
		$name=$_SESSION['name'];
		$id = $_SESSION["id"];
	 
		
		$result = mysqli_query($conn,"SELECT * FROM tbl_customer WHERE CustomerID='" . $id."'");	 
}

?>
  <?php 
 		while ($row= $result->fetch_assoc()):   
	  
	  {
		$id = $row['CustomerID'];
	    $CustomerName =$row['CustomerName'];
		$Address =$row['Address'];
		$City =$row['City'];
		$PostalCode =$row['PostalCode'];
		$Country =$row['Country'];		
			$Email =$row['Email'];		  
		$password =$row['password'];
		  $image =$row['image'];
	  }
	 ?> 

<?php   
 
$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli));

 

if (isset($_POST['submit']))
 
{
 

$displayname=$_POST['displayname'];
$subject=$_POST['subject'];
	
move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
	
	

	$mysqli->query("INSERT INTO tbl_review (displayname, subject, image) VALUES('$displayname','$subject','$image')") or die($mysqli->error);
	header("location:myreviews.php");
	
 
	
}
?>
 <?php endwhile; ?> 