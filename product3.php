<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "carcare");  

if(!isset($_SESSION['name']))
{
	header("location:product.php");
}
	$name=$_SESSION['name'];?> 

 

	 

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile Of <?php echo $name;?> </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	 <link href="css/slider.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
 	 
	 <link rel="shortcut icon" href="photos/car care logo (2).png" type="image/x-icon" /> 




 </head>
	<body style="background-color: white" > 
<div id="loader"></div>
	

 
	
	
<div align="center">
	
	<div align="center"> 
<div class="topnav" style="margin-left:0px" >
<a><img  width="120px" src="photos/car care logo (2).png" > </a>	
<a  href="myprofile.php">Customer <i class="fa fa-home" aria-hidden="true"></i>
 - <?php echo $name;?></a>
  	 <a    href="product.php">Batteries</a>
	 <a   href="product2.php">Spare Parts</a>
	 <a class="active" href="product3.php">Electronics</a>
	 <a  href="product4.php">Lighting</a>
	<a href="userLogout.php">Log Out</a>
 
  <a style="font-size: 20px" data-toggle="tab" href="#cart">Cart &nbsp; <span class="badge"><i class="fa fa-shopping-cart" aria-hidden="true"></i>&nbsp;<?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a>
	
 	
	
</div>
	
</div>
	</div>
		
	  
	
  
<div class="productsection" align="center">
	 						 
	<?php	
						 
$mysqli = new mysqli('localhost','root','','carcare') or die(mysqli_error($mysqli)); 
$resultSet = $mysqli->query("SELECT * FROM electronics");  
 							 
	  
if(isset($_POST['submit2']))
{	
$search = $mysqli->real_escape_string($_POST['search']);	
$resultSet = $mysqli->query("SELECT *  FROM electronics WHERE category = '$search'") ; 
}	 
?>					 						 
 
	
           <div class="container-fluid" style="width:1450px;" align="center">  
			   
			   
		 
	 
                <ul class="mynav nav nav-tabs">  
                     	 
                </ul>  
                <div class="tab-content">  
                     <div id="spareparts" class="tab-pane fade in active">  
						 
 			   <table align="center">
<form method="POST" class="form">
<th> <input type="text" name="search" class="form-control" width="100px">	  </th> 
<th><input type="submit" class="btn btn-primary" value="Search Product" name="submit2" class="form-group"></th>
</form>
 	 
	'				 
	</table>		
 		<div style="text-align:center">
 <h2 class="jumbotron">Car Alarms / Car DVR / Car Reversing Aid / In Car DVD Players / Navigation & GPS / Speakers</h2>
    
  </div>			
					
<table class="table table-bordered"   style=" color: black; font-size: 14px; border:10px; width: 90%">
  <thead>
    <tr>
		 
	  <th scope="span">Image</th>
      <th scope="col">Details</th>
      <th scope="col">Category</th>
	  <th scope="col">Price</th>
      <th scope="col">Quentity You want</th>
	  <th class="hidden" scope="col">test</th>
      <th class="hidden" scope="col">test</th>
	 <th class="hidden" scope="col">test</th>	
	 <th scope="col"> Add</th>	
    </tr>
  </thead>
  <tbody>
<?php
	  while($row = mysqli_fetch_array($resultSet)):
?>
    <tr>
		  <td>  <img src="images/<?php echo $row["image"]; ?>" width="80px" class="img-responsive" /><br /> </td>
		  <td>  <h4 class="text-info"> <a href="productdetails3A.php?id=<?php echo $row["id"]; ?>"> <?php echo $row["name"]; ?></a></h4>  </td>
	      <td>  <h4 class="text-primary"> <?php echo $row["category"]; ?></h4>  </td>
          <td>  <h4 class="text-danger">Rs <?php echo $row["price"]; ?></h4> </td>
		  <td>   <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" /> 
          <?php
            $qty = $row["qty"];
            
            if($qty==0){
              echo "<span id='ofstck' style='color: red;'>Out of Stock</span>";
              echo "<script> document.getElementById('quantity".$row["id"]."').value = 0;</script>";
              echo "<script> document.getElementById('quantity".$row["id"]."').readOnly = true;</script>";
            }
          ?>
      </td>
          <td class="hidden"> <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" /> </td>
	      <td class="hidden"><input type="hidden" name="hidden_name" id="category<?php echo $row["id"]; ?>" value="<?php echo $row["category"]; ?>" /> </td>
		  <td class="hidden"> <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  </td>
          <td> <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" /></td>
	 
    </tr>  
  </tbody>
<?php endwhile; ?>

</table>
	<?php
 	 function pre_r( $array ){
 	 	echo '<pre>';
 	 	print_r($array);
 	 	echo '</pre>';
 	 }
 	 ?>
					
			   
                     </div> 
					
					<div id="cart" class="tab-pane fade" style=" color: black;">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="25%">Product Name</th>  
										 <th width="25%">Category</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
										
										  <td><?php echo $values["product_category"]; ?></td> 
										
                                         
<td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right">Rs <?php echo $values["product_price"]; ?></td>  
										
                                         <td align="right">Rs <?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?></td>  

                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total Amount</td>  
                                         <td align="right">Rs <?php echo number_format($total, 2); ?> /=</td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="right">  
                                              <form method="post" action="cart.php">  
                                                   <input type="submit" name="place_order" class="btn btn-success" value="Place Order" />  
                                              </form>  
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                </div>  
           </div>  
	</div>	
	
	
</div>	 	
	  

	 
	  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/slider.js"></script>
  </body>
</html>

<script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
		   var product_category = $('#category'+product_id).val(); 
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name, 
						  product_category:product_category,
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Not Available")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      }); 
	
 });
	
	 
 </script>	