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

	  <style>
	
#register .container #register-row #register-column #register-box {
  margin-top: 220px;
  max-width: 600px;
  height:550px;
  color: black;
	 
	align: center;
	 
}
#register .container #register-row #register-column #register-box #register-form {
  padding: 10px;
  text-align: left;
}
#register .container #register-row #register-column #register-box #register-form #register-link {
 margin-top: 15px;
text-align: right;
	color: black;

}
        
 
	
	</style>

	  
  </head>
	
  <body style="background-color: grey">
	
	 
	
	
<?php
session_start();
$message="";

if(isset($_POST['submit'])){ 

if(count($_POST)>0) {
 include 'DBconnection.php';
	
$result = mysqli_query($conn,"SELECT * FROM tbl_customer WHERE email='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);

if(is_array($row)) {
$_SESSION["id"] = $row['CustomerID'];
$_SESSION["name"] = $row['CustomerName'];
$_SESSION["email"] = $row['email'];	
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:product.php");
}

}
	?>
	  
	  
 
	 
 <div class="div_contentaaa" style="overflow: hidden">  
		  
		 	
	
 <div id="register">
       
   
            <div class="container" >
            <div id="register-row"  align="center">
                <div id="register-column">
                    <div id="register-box">
                        
                        
                        <form id="register-form" class="form" action="userinsert.php" method="post">
                            
                            <h2 class="text-center text-info   alert-success">Register</h2>
                            
                            <div class="form-group">
                                
                                <input type="text"  id="CustomerName" class="form-control" name="CustomerName" placeholder="Customer Name" required>
                            </div>
							
							 <div class="form-group">
                              
                                <input type="text" id="Address" class="form-control" name="Address" placeholder="Address" required>
                            </div>
							
							<div class="form-group">
                               
                                <input type="text" id="City" class="form-control" name="City" placeholder=" City" required>
                            </div>
							
							<div class="form-group">
                              
                                <input type="text" id="PostalCode" class="form-control" name="PostalCode" placeholder=" Postal Code" required>
                            </div>
							<div class="form-group">
                                
                                <input type="text" id="Country" class="form-control" name="Country" placeholder="Country" required>
                            </div>
							<div class="form-group">
                               
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
							
							<div class="form-group">
                               
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
							
							<div class="form-group">
                           
                                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Register" >

                            </div>
            
                        </form>
                      <a style="color: white" href="loginindex.php"><button class="btn btn-warning btn-block" >Already Have an Account ? Login Now</button></a>   
                </div>
            </div>
        </div>
    </div> 


	
	</div>	


	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>