<?php
session_start();
 


 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-------------Style link------------------->
    <link rel="stylesheet"  href="styles.css">

</head>
<style>
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color:#228b22;
  color:#ff8c00;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
<body>

<div id="navbar">
  <span class="logo1"><img src="images/logo_WBO.jpg"></span>
     <ul>
        <li class="dropdown">
         <button class="dropbtn"  style="margin-right: 15px;">ABOUT US  <span class="glyphicon glyphicon-chevron-down"></span></button>
         <div class="dropdown-content">
         <a href="#">About WBO</a>
         <a href="#">Our Mission</a>
         <a href="#">Quality And Technology</a>
         <a href="#">Our Uniqe Capabilities</a>
         </div>
       </li>
             
           <li class="dropdown">
              <button class="dropbtn" style="margin-right: 15px;">OUR TEAM  <span class="glyphicon glyphicon-chevron-down"></span></button>
         <div class="dropdown-content">
         <a href="#">WBO Leadership</a>
         <a href="#">The Clinical Team</a>
         <a href="#">Meet the team </a>
         </div>
             </li>

             <li class="dropdown"> 
                <button class="dropbtn"  style="margin-right: 15px;">OUR NETWORK <span class="glyphicon glyphicon-chevron-down"></span> </button>
         <div class="dropdown-content">
         <a href="#">Collection Center</a>
         <a href="#">Doctor Clinics</a>
         
         </div>
             </li>
           <li><a href="#">PARTNER WITH US</a></li>
             <li><a href="#">CONTACT US</a></li> 
             <li><a href="#"><span class="glyphicon glyphicon-calendar" ></span> Test Packages</</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-share" ></span> Report</</a></li>
           
            <?php 
            $count=0;
            if(isset($_SESSION['cart']))
            {
              $count=count($_SESSION['cart']);
            }
            ?>
             <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background:#ff8c00;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;"><?php echo $count; ?></span></a></li>
           </ul>
  

</div>


  <div style="padding:0px 0px 2250px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/logo_WBO.jpg"></a>
            <input type="text" class="form-control" Placeholder="Search essentials, groceries, and more ...">
            <div class="input-group-text">Search</div>
        </div>
        <div class="menu-bar">
          <ul>
        <li><span class="glyphicon glyphicon-calendar" ></span><a href="test-packages.php"><b> Test/ Package</b></</a></li>
             <li><span class="glyphicon glyphicon-share"></span><a href="report.php"><b> Report</b></a></li>
            <?php 
            $count=0;
            if(isset($_SESSION['cart']))
            {
              $count=count($_SESSION['cart']);
            }
            ?>
             <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background:#ff8c00;
    border-radius: 50%;font-size: 15px;padding: 4px  7px; color: #228b22"><?php echo $count; ?></span></a></li>
           </ul>
        </div>
       <div class="menu-bar2">
         <ul>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">About WBO</a></li>
          <li><a href="#">Our Mission</a></li>
          <li><a href="#">Quality And Technology</a></li>
          <li><a href="#">Our Uniqe Capabilities</a></li>
        </ul>
             </li>
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> OUR TEAM <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">WBO Leadership</a></li>
          <li><a href="#">The Clinical Team</a></li>
          <li><a href="#">Meet the team </a></li>
        </ul>
             </li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> OUR NETWORK <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Collection Center</a></li>
          <li><a href="#">Doctor Clinics</a></li>
        
        </ul>
             </li>
             <li><a href="#">PARTNER WITH US</a></li>
             <li><a href="#">CONTACT US</a></li>
              <li style="margin-left: 170px;"><a href="#"><span class="glyphicon glyphicon-earphone"></span> 7982100200</a></li>
         </ul>
       </div>
     
       <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<!-------------------------corousel-slider------------------------------------------>

      <div class="slider">
         <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" ></li>
                <li data-target="#myCarousel" data-slide-to="2" ></li>
                <li data-target="#myCarousel" data-slide-to="3" ></li>
               
                
               </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/slider2.jpg"  style="width: 1350px; height: 80vh;" >
                </div>
                 <div class="item">
                   <img src="images/slider8.jpg" style="width: 1350px; height: 80vh;">
                </div>
                <div class="item">
                     <img src="images/v8q-dental-clinic.jpg" style="width: 1350px; height: 80vh;">
                </div>
                 <div class="item">
                     <img src="images/hospital.jpg" style="width: 1350px; height: 80vh;">
                </div>
                
                
            </div>
      </div>
      </div>  
  <!------------------------------------------2nd row---------------------------------->
   <div class="row" style="margin-left: 6%; margin-right: 3%;" >
    <div class=" col-sm-5" id="content">
           
         <form>
             <h3 style="padding-left: 26%; color:#ff8c00; font-weight: bold; ">ENQUIRE NOW</h3>
           <div class="form-group">
              <input type="text" class="form-control" id="p-name" placeholder="Full Name" name="ptitle" required>
         </div>
          <div class="form-group">
              <input type="text" class="form-control" id="p-name" placeholder="Email" name="ptitle" required>
         </div>
          <div class="form-group">
              <input type="text" class="form-control" id="p-name" placeholder="Phone" name="ptitle" required>
         </div>
          <div class="form-group">
              <textarea class="form-control" id="addr" name="addr" placeholder="Enter Queries" rows="2" required></textarea>
         </div>
         <button type="submit" class="btn btn-warning" style="margin-left: 30%; margin-bottom:5%; ">SEND ENQUERY</button>
         </form>
    </div>
    <div class=" col-md-3" style="margin-left: 3%;"><a href="All-tests.php"><img src="images/blood-test.jpg" height="328px" 
     style="border: 3px solid #ff8c00; border-radius: 5px;"></a></div>
     <div class="col-md-3" ><a href="All-packages.php"><img src="images/packages.png" height="328px" style="border: 3px solid #ff8c00; border-radius: 5px;"></a></div>
   </div>
  <br>
<!-----------------------------3rd row----------------------------------->
    <div class="row" style="margin-left: 5%; margin-right: 4%;" >
       <div class="col-md-3"><a href="partner-with-us.php" ><img src="images/business-partnership.jpg" style="border: 3px solid #ff8c00; border-radius: 5px;"></a></div>
      <div class="col-md-3"><a href="demo.php"><img src="images/test-report.png" style="border: 3px solid #ff8c00; border-radius: 5px;"></a> </div>
     <div class="col-sm-5"><video width="540px" controls>
    <source src="images/health_video.mp4" type="video/mp4">
  </video></div>
    </div><br><br>

    <section>
       <h3 style="padding-left:40%;color:  #228b22; "><b>TOP WELLNESS PACKAGES<br><span style="padding-left: 12%;color: #ff8c00">
        ________ <span><b></h3><br>

<div class="row" style="margin-left: 10%; margin-right: 0px;" >
  <div class="col-md-3" id="contain"><img src="images/well_3.jpg" alt="Avatar" class="image">
    <p style="font-size: 13px;padding: 7% 0 0 8%;"><b>WELLWISE TOTAL PROFILE<b></p>
      <h4 style="padding-left: 28%; color:#ff8c00"><b>Rs.3232</b></h4>
  <div class="overlay">
    <div class="text">Add to Cart</div>
  </div></div>
  <div class="col-md-3" id="contain"><img src="images/well_2.jpg" alt="Avatar" class="image">
    <p style="font-size: 13px;padding: 7% 0 0 8%;"><b>WELLWISE ADVANCE PROFILE<b></p>
      <h4 style="padding-left: 28%; color:#ff8c00"><b>Rs.3432</b></h4>
  <div class="overlay">
    <div class="text">Add to Cart</div>
  </div></div>
  <div class="col-md-3" id="contain"><img src="images/well_1.jpg" alt="Avatar" class="image">
    <p style="font-size: 13px;padding:7% 0 0 3%;"><b>WELLWISE ESSENTIAL PROFILE<b></p>
      <h4 style="padding-left: 28%;color:#ff8c00"><b>Rs.3222</b></h4>
  <div class="overlay">
    <div class="text">Add to Cart</div>
  </div></div>
  <div class="col-md-3" id="contain"><img src="images/well_4.jpg" alt="Avatar" class="image">
    <p style="font-size: 13px;padding: 7% 0 0 16%;"><b>MAX VITAMIN PANEL<b></p>
      <h4 style="padding-left: 28%; color:#ff8c00"><b>Rs.3552</b></h4>
  <div class="overlay">
    <div class="text">Add to Cart</div>
  </div></div>
  
</div>
</section>
  <!-------------------------footer----------------------------------->
  <section class="footer" style="background-color:#fff; margin-top: 10%;color:#6B8E23; height: 60vh; border-top:1px solid #6B8E23 ">
         <div class="container text-center">
             <div class="row">
              <div class="col-md-3">
                     <h1>WELCOME TO WBO</h1>
                     <img src="images/logo.jpg" width="300px">
                 </div>
                 <div class="col-md-3">
                     <h1>Useful Links</h1>
                     <p>Privacy Policy</p>
                     <p>Terms of Use</p>
                     <p>Return Policy</p>
                     <p>Discount Coupons</p>
                     <p>Terms of Use</p>
                     <p>Return Policy</p>
                     <p>Discount Coupons</p>
                 </div>
                 <div class="col-md-3">
                     <h1>Company</h1>
                     <p>About Us</p>
                     <p>Contact Us</p>
                     <p>Career</p>
                     <p>Affiliate</p>
                     <p>Contact Us</p>
                     <p>Career</p>
                     <p>Affiliate</p>
                 </div>
                  <div class="col-md-3">
                     <h1>Follow Us On</h1>
                     <p>Facebook</p>
                     <p>YouTube</p>
                     <p>Linkedin</p>
                     <p>Twitter</p>
                 </div>
                  
         </div>
         <hr>
         <p class="copyright">Copyright @2020 All rights reserved</p>
     </div>
     </section>





  </div>
</div>



<script>
//When the user scrolls down 20px from the top of the document, slide down the navbar 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-66px";
  }
}
</script>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
