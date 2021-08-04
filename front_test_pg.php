<?php
   // Start the Session
   session_start();
   ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 103 Template</title>
<meta name="viewport" content="width = device-width, initial-scale = 1.0">

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
 <!-------------Style link------------------->
    <link rel="stylesheet"  href="styles.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>
<script src = "https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src = "https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style type="text/css">
  body{
    margin:0;
    padding: 0;
    background: #fff;
    font-family: sans-serif;
  }

  .new-arrival{
  	background: green;
  	width: 50px;
  	color: #fff;
  	font-size: 12px;
  	font-weight: bold;
  	margin-top: 20px;
  }
  .sticky {
  	margin-top: 48px;
  position: -webkit-sticky;
  position:fixed;
  
  width: 350px;
  
  
}

 .col-md-7{
 	float: right;
 }
 .single-product .glyphicon{
 	color: #ff8c00;
 }
 .single-product .price{
 	color: #ff8c00;
 	font-size: 26px;
 	font-weight: bold;
 	padding-top: 20px;
 }
 .single-product input{
 	border:1px solid #ccc;
 	font-weight: bold;
 	height: 33px;
 	text-align: center;
 	width: 30px;
 }
 .single-product .btn-default{
 	color: red;
 	font-weight: bold;
 	border:none;

 }
 .size-btn{
	width:40%;
	height:57px;

	border-radius: 50px;
}
.size-btn ul{
	display: inline-flex;
	
	padding-left: 7px;
}
.size-btn ul li{
	border: 1px solid #000;
	list-style-type: none;
	padding: 15px 20px;
	text-align: center;
	background-color: #ff8c00;
	cursor:pointer;
	border-radius: 50%;
}
.size-btn ul li a{
	color: #fff;
    font-size: 18px;
	font-weight: bold;
	text-decoration:none;

}
.size-btn ul li:hover{
   background-color: #000;

}
.size-btn ul a:hover{
   background-color: #000;
	color:red;
}

.single-product .btn-primary{
	background: #fff;
	border:1px solid #ff8c00;
	color:#ff8c00;
	font-size: 18px;
 	font-weight: bold;
 	text-decoration: none;
}

.single-product .btn-primary:hover{
	color:#000 ;
	background: #fff;
}
.single-product .btn-warning{
	background: #fff;
	border:1px solid green;
	color:green;
	font-size: 18px;
 	font-weight: bold;
 	text-decoration: none;
}

.single-product .btn-warning:hover{
	color:#00008B ;
	background:#fff;
	border:1px solid #DC143C;
}
.single-product .glyphicon-heart:hover{
    color:#00008B ;
	background:#fff;
	border:1px solid #DC143C;
}
.product-col  ul{
column-count: 2;
	column-gap: 1;
}
.product-col ul li{
	list-style-type: none;
	
}
.item ul{
column-count: 2;
	column-gap: 1;
}
.item ul li{
	list-style-type: none;
	
}

	

 
</style>
</head>
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


  <div style="padding:0px 0px 1200px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/logo_WBO.jpg"></a>
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
    <!----------single product------------------------------------->
    <?php
    $_SESSION["pid"]=$_GET["id"];

    ?>
    <iframe src="test_page.php" height="620px" width="100%" alt="Ladies Kurti">
    </iframe>
    <section class="footer" style="background-color:#fff; margin-top: 10%;color:#6B8E23; height: 60vh; border-top: 1px solid #6B8E23;">
         <div class="container text-center">
             <div class="row">
              <div class="col-md-3">
                     <h1><b>WELCOME TO MAXLAB<b></h1>
                     <img src="images/logo.jpg">
                 </div>
                 <div class="col-md-3">
                     <h1><b>Useful Links</b></h1>
                     <p>Privacy Policy</p>
                     <p>Terms of Use</p>
                     <p>Return Policy</p>
                     <p>Discount Coupons</p>
                     <p>Terms of Use</p>
                     <p>Return Policy</p>
                     <p>Discount Coupons</p>
                 </div>
                 <div class="col-md-3">
                     <h1><b>Company</b></h1>
                     <p>About Us</p>
                     <p>Contact Us</p>
                     <p>Career</p>
                     <p>Affiliate</p>
                     <p>Contact Us</p>
                     <p>Career</p>
                     <p>Affiliate</p>
                 </div>
                  <div class="col-md-3">
                     <h1><b>Follow Us On</b></h1>
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
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>