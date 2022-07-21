<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title>Car Care ( PVT ) LTD</title>
	  <link rel="icon"  type="image/png" href="photos/header.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
	  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<?php
	;
	extract($_POST);

include("DBconnection.php");

$sql=mysqli_query($conn,"SELECT * FROM tbl_customer where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "<h1 align='center' class='alert alert-info'>This Email Id Already Exists</h1>"; 
	echo "<button class='btn btn-danger btn-block' ><a style='color: white' href='registerindex.php'>Back to Register</a></button>";
	echo "<h1 class='alert alert alert alert alert-warning btn-block'  align='center'>Some one is already using the same email. Choose a different email address to proceed.</h1>";
	exit;
	 
}
if (isset($_POST['submit'])) {
	include("DBconnection.php");

$CustomerName=$_POST['CustomerName'];
$Address=$_POST['Address'];
$City=$_POST['City'];
$PostalCode=$_POST['PostalCode'];
$Country=$_POST['Country'];
$email=$_POST['email'];	
$password=$_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

//$trn_date = date("Y-m-d H:i:s");

//echo $user_fname;
//echo $user_lname;
//echo $user_email;
//echo $user_address;
//echo $user_City;
//echo $user_ZipCode;
//echo $user_password;

	$sql = "INSERT INTO tbl_customer ". "(CustomerName, Address, City, PostalCode,Country,email ,password)"."VALUE('$CustomerName','$Address','$City','$PostalCode','$Country','$email','$hashed_password')";
	
	$results = mysqli_query($conn, $sql);
	
	if(!$results) {
	  die('Could not enter data: '.mysqli_error($conn));
	}
	else
	{
  //  echo "Entered data successsfully\n";
	header("Location:index.php");
	}
   }
else
   {
	  //  echo 'submit the form first';
   }
?>
