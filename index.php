
<?php
 $connect = mysqli_connect("localhost", "root", "", "carcare");  
?>
<!DOCTYPE html>
<html>
    <head> 
		<style>
.collapsible {
  background-color: ;
  color: black;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 18px;
}

.active, .collapsible:hover {
  background-color: #555;
}

.contenti {
  padding: 0 18px;
  display: none;
  overflow:  ;
  background-color: white;
	color: black
}
</style>
		<style>
body {
  font-family: Franklin Gothic Medium;
}

.navbar {
  overflow: hidden;
   font-family: Franklin Gothic Medium;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size:18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
   
  margin: 0;
	font-family: Franklin Gothic Medium ;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: gainsboro;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(15rem, 1fr));
    gap: 1.5rem;
    align-items: center;
    flex-wrap: wrap;
    padding: 10px;
    margin-left: 3rem;
}
img{
    border-radius: 50%;
}
</style>
</style>
        <title>Car Care</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="imgs/style_1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	
	
 
	 
	 <link rel="shortcut icon" href="photos/1.PNG" type="image/x-icon" /> 

	
	
	
	
	
    </head>
    <body>
        <header class="header" style="background-color: rgba(160,160,160,1.00)">
            <a href="#" class="logo">
                <img src="imgs/car care logo (2).png">
            </a>
            <nav class="navbar">
                <a href="#home">HOME</a>
				<a href="#about">ABOUT</a>
                <a href="#services">SERVICES</a>
                <div class="dropdown">

    <button class="dropbtn">Products 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="productvisitor (1).php">Batteries</a>
      <a href="productvisitor (2).php">Spare Parts</a>
      <a href="productvisitor (3).php">Electronics</a>
    <a href="productvisitor (4).php">Lighings</a>   
    </div>
  </div> 
                <a href="#review">REVIEW</a>
                <a href="#contactus">CONTACT US</a>
                 <a href="indexlg.php">Login In</a>
                 
            </nav>
        
          
          
          
          
        </header>

        <div class="login-form-container">
            <i class="fas fa-time" id="form-close"></i>
            <form action="">
                <h3>Login</h3>
                <input type="email" class="box" placeholder="Enter Email Here"><br>
                <input type="password" class="box" placeholder="Enter password Here"><br>
                <input type="submit" value="login now" class="btn">
                <input type="checkbox" id="remember">
                <label for="remember">remember me</label>
                <p>Forget Password? <a href="#">Click here</a></p>
                <p>Don't have an account?  <a href="#">Register NOw</a></p>
                <p>Login in with</p>
                <center>
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                </center>
                
            </form>
        </div>
        <section class="home" id="home">
            <div class="content">
                <h1>Car Care Kalutara </h1>
                <h4>We add more value to your vehicles</h4><br><br>
                <p>We ready to give your vehicle more value for money in your hand we will give the best service for your vehicle
             <br>stay with us..</p>
                <a href="loginindex.php" class="btn">Join with us</a>
            </div>
            <div class="controls">
                <span class="vid-btn" data-src="imgs/Mobile Service from Mercedes-Benz Manhattan(480P)(0)(0).mp4"></span>
                <span class="vid-btn" data-src="imgs/Mobile Service from Mercedes-Benz Manhattan(480P)(0)(0).mp4"></span>
                <div class="video-container">
                    <video src="imgs/Mobile Service from Mercedes-Benz Manhattan(480P)(0)(0).mp4" id="video-slider" loop autoplay muted></video>
                </div>
            </div>
            


        </section>
        <!--about section-->

        <section class="about" id="about">
            <h1 class="heading"><span>About</span> Us</h1>
            <div class="row">
                <div class="image">
                    <img src="imgs/bg.jpg">
                </div>
                <div class="content">
                <h3>What makes our service special?</h3>
                <p>Metro professional is the best service providers in kaluthara and sevice center which has reputed service and spare parts.
                we have long history  </p>
                <p>You Can Trust Everyone knows Metro Professional is the area's preferred Ford dealership for New and Certified 
                    Pre-Owned spare parts</p>
                    
                <h5>Stop by your preferred dealership near Scranton today, and let the experts at Metro Professional
                     next service or auto repair. this trusted for over 10 years by kalutara</h5><br>
                    
                   <button type="button" class="collapsible">Contact Information&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
                    <div class="contenti">
                    <center><h1 style="color:blue;"> Metro Professionals-Kalutara</h1></center>
                    <center><table cellpadding="20px" cellspacing="20px">
                        <tr>
                            <th>Day</th>
                            <th>Time</th></tr>
                        <tr>
                            <td>Monday to saturday</td>
                            <td>9.30a.m-11p.m.</td></tr>

                        <tr>
                            <td>Sunday</td>
                            <td>9.30a.m.-4p.m</td></tr>

                    </table></center><br>
                    <center><table cellpadding="20px" cellspacing="20px">
                        <tr>
                            <th rowspan="2">Tel:</th>
                            <th>034 2233966</th></tr>
                        <tr>
                            <th>0712343567</th></tr>
                    </table></center>
                    </div>





                </div>
            </div>

   
        </section>
        <section class="SERVICES" id="services"  style="color: azure" >
            <h1 class="heading">
                <span>S</span>
                <span>E</span>
                <span>R</span>
                <span>V</span>
                <span>I</span>
                <span>C</span>
                <span>E</span>
                <span>S</span>
            </h1>
            <div class="int">
                <p style="color: azure">
                    Our team of highly trained mechanics will handle everything from routine maintenance to major automotive repairs, and so much more. 
                    Below is just a fraction of the automotive services that our Carcare service center handles:
                </p>
            </div>
            <div class="list"  style="color: azure"> 
                <ul>
                     
                    <br>
                  <button type="button" class="collapsible">Repair & Service&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>   
</button> 
<div class="contenti">
<br> <p style="color: blue;"> If necessary, we can help you with maintenance and repairs quickly and easily thanks ... However, some repairs can only be carried out in a service center</p>
  <center><img src="imgs\1632728133537.jpg"></center>
</div>
               <br>       
                     
                     <button type="button" class="collapsible">Your Oil Change Service&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="contenti">
 <br> <p style="color: blue;"> It is a high-quality and speedy service provided by trained and competent staffs who promise</p>
  <center><img src="imgs\1632728133517.jpg"></center>
</div>
                   
 <br> 
                     
                   <button type="button" class="collapsible">Brake Service & Repair&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="contenti">
<br> <p style="color: blue;">Disc brakes, Drum brakes, Calipers and Rotors, Shoes and Pads – Whatever part of your brakes need a service our Repco Autotech trained technicians can help.</p>
<center><img src="imgs\1632728133421.jpg"></center></div>
                       
                   <br> 
                  <button type="button" class="collapsible">Battery Service&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="contenti">
<br> <p style="color: blue;">Protect your backup power system with rigorous battery maintenance. The battery services contain replacement & disposal, discharge and impedance testing.</p>
  <center><img src="imgs\1632728133537.jpg"></center></div>

</div>

                       <br> 
                   
                    <button type="button" class="collapsible">Expert Wheel Alignment Services&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="contenti">
<br> <p style="color: blue;">Stop your vehicle pulling to the left or right and protect against unusual tire wear with a wheel alignment from Fuller's Service Center.</p>
  <center><img src="imgs\1632728133421.jpg"></center>
</div> <br> 
                          <button type="button" class="collapsible">Other &nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="contenti">
  <p>  <li><a href="#">Emission Services</a></li><br>
                    <li><a href="#">Windshield Wiper Replacements</a></li><br>
                    <li> <a href="#">Transmission Flushes</a></li><br>
                    <li><a href="#"> Filter Changes</a></li><br>
                    <li> <a href="#">Brake Pad Replacements</a></li><br>
                    <li><a href="#"> Tire Alignments</a></li><br>
                    <li><a href="#"> Tire Rotation and Balances</a></li><br>
                    <li> <a href="#">Full Vehicle Diagnostics</a></li><br></p>
</div>
                       
                   
                <br>   
                <button type="button" class="collapsible">Headlight Replacements&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
</button>
<div class="contenti">
<br> <p style="color: blue;">Looking for the best place to fix car headlights? Find quick & affordable service, repair or replacement for your headlight bulb at a Meineke nearby.</p>
  <center><img src="imgs\1632728133537.jpg"></center>
</div>
                    
                </ul>
            </div>
      </section>

 
		
		    <div class="" id="review" align="center" >
				
				  <h1 class="heading"><span>Reviews</span> </h1>
         
                 
                        
                     <?php  
                     $query = "SELECT * FROM tbl_review ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                          <div class="grid-container">  
                           <div style="border:10px solid #; background-color:#7EE8FF; border-radius:15px; padding:10px; height: :200px; width: 300px" align="center">
                                  
                               <h2 class="text-danger btnn"> <?php echo $row["displayname"]; ?></h2>
							  <hr>
							    <img src="images/<?php echo $row["image"]; ?>" width="50px" height="50"/><br>  
							   	  <hr>
                                <h4 class="text-danger"><b>Review - </b><?php echo $row["subject"]; ?></h4>
							  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     
			 
      
            


        </div>

        
        <section class="contactus" id="contactus">
            <h1 class="heading">
                <span>Contact  </span>Us 
            </h1>
            <div class="row">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31710.265532688463!2d79.96712184592897!3d6.549036032620321!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae23138e953a07b%3A0x6db6a5995b6cb34a!2sKatukurunda!5e0!3m2!1sen!2slk!4v1632628532060!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
                <form action="feedbackinsert.php" method="post">
                    <h3>get in touch</h3>
                    <div class="inputbox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
					  <div class="inputbox">
                        <span class="fas fa-user"></span>
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                    <div class="inputbox">
                        <span class="fas fa-envelope"></span>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="inputbox">
                        <span class="fas fa-mail-bulk"></span>
                        <input type="text" name="subject" placeholder="Subject">
                    </div>
                    <input type="submit" name="submit" value="Send now" class="bttn">
                </form>
            </div>
        </section>

        <section class="footer">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>

            <div class="links">
                <a href="#">home</a>
                <a href="#">about</a>
               
          
                <a href="#">contact us</a>
            </div>

            <div class="credit"> created by <span>Miss. G.D.S.Shivangana</span> | all rights reserved

            </div>
        </section>


        













<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>


        
      









        <script src="js/script.js"></script>
        
   
    </body>

</html>