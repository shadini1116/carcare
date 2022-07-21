<?php
	;
	
if (isset($_POST['submit'])) {
	include("DBconnection.php");

$firstname=$_POST['fname'];
$lastname=$_POST['lname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
 

	$sql = "INSERT INTO tbl_feedback ". "(fname, lname, email, subject)"."VALUE('$firstname','$lastname','$email','$subject')";
	
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
