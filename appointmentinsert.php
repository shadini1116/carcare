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
	    $email = $_SESSION["email"];
	$result = mysqli_query($conn,"SELECT * FROM tbl_customer WHERE id='" . $id."'");
		$row  = mysqli_fetch_array($result);
		
		if($row >0)
		{

		$emails =$row['email'];

		 }
		 
}


if(isset($_POST['submit'])){
 
	
    $Package = $_POST['Package'];
    $Vehicaltype = $_POST['Vehicaltype'];
	$Vehicalnumber = $_POST['Vehicalnumber'];
	$date = $_POST['date'];
	 
	$query = "INSERT INTO appointments "."(customerid, name, email, package, vehicaltype, vehicalnumber, date)"."VALUE('$id','$name','$email','$Package','$Vehicaltype','$Vehicalnumber','$date')";
	
	 $query_run = mysqli_query($conn, $query);
	
	 
	if($query_run) {
		
   echo '<script>alert("You have successfully place an appointment......Thank you")</script>';	
		
   header('location:serviceyourcar.php') ; 
		
	}
	else
	{
	echo 
		"form not submitted";
	}               
}

?>