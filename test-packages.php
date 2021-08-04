
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
  ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  
}
ul.breadcrumb li {
  display: inline;
  font-size: 15px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
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


  <div style="padding:0px 0px 800px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/logo_WBO.jpg"></a>
            <input type="text" class="form-control" Placeholder="Search essentials, groceries, and more ...">
            <div class="input-group-text">Search</div>
        </div>
        <div class="menu-bar">
          <ul>
        <li><span class="glyphicon glyphicon-calendar" ></span><a href="#"><b> Test/ Package</b></</a></li>
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

     <!------------------------------------container------------------------------>
       <div class="container">
     <div class="row" >
       
        <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>Book A Test / Packages</li>
        </ul>
      
      <h3 style="padding-left:40%;color:  #228b22; "><b>Choose A Package<br><span style="padding-left: 8%;color: #ff8c00">
        _______ <span><b></h3><br>
        <div class="col-md-3">
          <img src="images/packages.jpg" height="328px"  style="border: 3px solid #ff8c00;border-radius: 5px;">
        </div>
         <div class="col-md-3">
          <img src="images/fever (1).jpg" height="328px"  style="border: 3px solid #ff8c00; border-radius: 5px;">
      </div>
       <div class="col-md-3">
        <img src="images/woman-health.jpg" height="328px" style="border: 3px solid #ff8c00; border-radius: 5px;">
       </div>
        <div class="col-md-3">
          <img src="images/all-packages.jpg" height="328px" style="border: 3px solid #ff8c00; border-radius: 5px;">
        </div>
     </div><br>
     <div class="row">
       <h3 style="padding-left:40%;color:  #228b22; "><b>Choose A Test<br><span style="padding-left: 6%;color: #ff8c00">
        _____<span><b></h3><br>
        <div class="col-md-3">
          <img src="images/Dengue (1).jpg" height="328px"  style="border: 3px solid #ff8c00; border-radius: 5px;">
        </div>
         <div class="col-md-3">
          <img src="images/Diabetes-profile.jpg" height="328px"  style="border: 3px solid #ff8c00; border-radius: 5px;">
      </div>
       <div class="col-md-3">
        <img src="images/cbc.jpg" height="328px" style="border: 3px solid #ff8c00; border-radius: 5px;">
       </div>
        <div class="col-md-3">
          <img src="images/all-test.jpg" height="328px" style="border: 3px solid #ff8c00; border-radius: 5px;">
        </div>
     </div>
   </div>


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
   
     <!---------------------------footer end---------------------------->
   
  




</div>
   
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