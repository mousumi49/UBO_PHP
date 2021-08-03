<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-------------Style link------------------->
    <link rel="stylesheet"  href="styles.css">

</head>
<body>

<div id="navbar">
  <span class="logo1"><img src="images/logo_WBO.jpeg"></span>
<ul>
   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#about">ABOUT US  <span class="glyphicon glyphicon-chevron-down"></span></a>
           
             </li>
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#news"> OUR TEAM <span class="glyphicon glyphicon-chevron-down"></span></a>
            
             </li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#news"> OUR NETWORK <span class="glyphicon glyphicon-chevron-down"></span></a>
            
             </li>
           <li><a href="#">PARTNER WITH US</a></li>
             <li><a href="#">CONTACT US</a></li> 
            
            <li><a href="#"><span class="glyphicon glyphicon-share" ></span> Report</</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-calendar" ></span> Report</</a></li>
            <?php 
            $count=0;
            if(isset($_SESSION['cart']))
            {
              $count=count($_SESSION['cart']);
            }
            ?>
             <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;"><?php echo $count; ?></span></a></li>
           </ul>
  

</div>


  <div style="padding:0px 0px 1000px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/logo_WBO.jpeg"></a>
            <input type="text" class="form-control" Placeholder="Search essentials, groceries, and more ...">
            <div class="input-group-text">Search</div>
        </div>
        <div class="menu-bar">
          <ul>
        <li><span class="glyphicon glyphicon-calendar" ></span><a href="#"> Test/ Package</</a></li>
             <li><span class="glyphicon glyphicon-share"></span><a href="report.php"> Report</a></li>
            <?php 
            $count=0;
            if(isset($_SESSION['cart']))
            {
              $count=count($_SESSION['cart']);
            }
            ?>
             <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;"><?php echo $count; ?></span></a></li>
           </ul>
        </div>
       <div class="menu-bar2">
         <ul>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ABOUT US <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
             </li>
           <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> OUR TEAM <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
             </li>
             <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> OUR NETWORK <span class="glyphicon glyphicon-chevron-down"></span></a>
              <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
             </li>
             <li><a href="#">PARTNER WITH US</a></li>
             <li><a href="#">CONTACT US</a></li>
              <li style="margin-left: 170px;"><a href="#"><span class="glyphicon glyphicon-earphone"></span> 7982100200</a></li>
         </ul>
       </div>

    <!------------------------Content------------------------------------------>
    <div class="container">
    <div class="row" style="margin-top: 5%;">
       <div class=" col-sm-6  col-md-offset-3">
         <h1>New to WBO ?</h1>
      <div><a href="registration.php" type="button" class="btn btn-success">Create your WBO Account</a> or <button class="btn btn-warning">Sign Up with Facebook</button></div><br>
      <h2>EXISTING USER LOG IN</h2>
      <form role="form" method="post" action="manage_login.php">
        <div class="form-group">
              <input type="email" class="form-control" id="p-name" placeholder="Email-Id" name="email" required>
         </div>
          <div class="form-group">
              <input type="Password" class="form-control" id="p-name" placeholder="Password" name="pass" required>
         </div>
         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-off"></span> Log In</button>
      </form>
    </div>
     </div>
   </div>
         <!-------------------------footer----------------------------------->
  <section class="footer" style="background-color:#fff; margin-top: 10%; color:#6B8E23; height: 60vh; border-top: 1px solid #6B8E23;">
         <div class="container text-center">
             <div class="row">
              <div class="col-md-3">
                     <h1>WELCOME TO WBO</h1>
                     <img src="images/logo_WBO.jpeg">
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

 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>