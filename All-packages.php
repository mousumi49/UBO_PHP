<!DOCTYPE html>
<html>
<head>
	<title>All Packages</title>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-------------Style link------------------->
    <link rel="stylesheet"  href="Styles.css">
</head>
<style>
  ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
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

#price-list ul li{
  list-style: none;

}
 #price-list ul li a{
   text-decoration: none;
   font-size: 12px;
  color: #ff8c00;
 }

#package{
  position: relative;
  width: 20%;
  margin-left: 10%;
  
}

.overlayer {
  position: absolute;
  bottom: -15%;
  left: 20px;
  right: 0px;
  background-color: #008CBA;
  overflow: hidden;
  width: 135%;
  height: 0;
  transition: .5s ease;
}

#package:hover .overlayer {
  bottom: 0;
  height: 5vh;

}
#package:hover .images {
  opacity: 0.3;

}

#package:hover .overlayer {
  opacity: 1;
}

.text1 {
  white-space: nowrap; 
  color: white;
  font-size: 18px;
  position: absolute;
  overflow: hidden;
  font-weight: normal;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
.images {
  opacity: 1;
  display: block;
  width: 165%;
  transition: .5s ease;
  backface-visibility: hidden;

}


</style>
<body>
  
<div id="navbar">
  <span class="logo1"><img src="images/logo_WBO.jpg"></span>
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
             <li><a href="mycart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;">
    <?php if(isset($_SESSION["cart_qty"])){ 
      echo $_SESSION["cart_qty"];
    } else{ 
      echo "0";
    }?></span></a></li>
           </ul>
  

</div>


  <div style="padding:0px 0px 1000px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/logo_WBO.jpg"></a>
            <input type="text" class="form-control" Placeholder="Search essentials, groceries, and more ...">
            <div class="input-group-text">Search</div>
        </div>
        <div class="menu-bar">
          <ul>
        <li><span class="glyphicon glyphicon-calendar" ></span><a href="#"> Test/ Package</</a></li>
             <li><span class="glyphicon glyphicon-share"></span><a href="#"> Report</a></li>
             <li><a href="mycart.php"><span class="glyphicon glyphicon-shopping-cart"><span id="badge" style="background: red;
    border-radius: 50%;font-size:15px;padding: 4px 7px 4px 7px"; >
    <?php if(isset($_SESSION["cart_qty"])){ 
      echo $_SESSION["cart_qty"];
    } else{ 
      echo "0";
    }?></span></span></a></li>
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
 
    <!-----------------------------------contain------------------------>
 <?php
   $servername = "localhost";
$username ="root";
$password = "";
$database="packages";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

   
    $page=$_GET["page"];
    

    if($page=="" || $page=="1")
    {
      $page1=0;
    }else{
      $page1=($page*9)-9;
    }

  ?>
<div class="container">
     <div class="row" style="margin-left: 2%;">
      <div class="col-md-3" id="price-list">
      <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>All Packages</li>
        </ul>
        <h4>CHOOSE BY :</h4>
        <h4 style="color:#228b22; padding-top: 15px;"><b>PRICE</b></h4>
        <ul>
          <li><a href="">Rs.0 - Rs.499.99 <span style="padding-left: 42%;">(85 items)</span> </a></li>
          <li><a href="">Rs.500 - Rs.999.99 <span style="padding-left: 36%;">(63 items)</span> </a></li>
          <li><a href="">Rs.1000 - Rs.1499.99 <span style="padding-left: 31%;">(40 items)</span> </a></li>
          <li><a href="">Rs.1500 - Rs.1999.99 <span style="padding-left: 31%;">(52 items)</span> </a></li>
          <li><a href="">Rs.2000 - Rs.2499.99 <span style="padding-left: 31%;">(28 items)</span> </a></li>
          <li><a href="">Rs.2500 - Rs.2999.99 <span style="padding-left: 31%;">(16 items)</span> </a></li>
          <li><a href="">Rs.3000 - Rs.3499.99 <span style="padding-left: 31%;">(13 items)</span> </a></li>
          <li><a href=""> Rs.3500 - Rs.3999.99<span style="padding-left: 31%;">(20 items)</span> </a></li>
          <li><a href="">Rs.4000 - Above <span style="padding-left: 42%;">(14 items)</span> </a></li>
        </ul>
          
      </div>
      <div class="col-md-9" >
        <br><br>
        <div class="row"  >
<?php
  $sql="SELECT * FROM `all_packages`  LIMIT $page1, 9 ";
   $result = $conn->query($sql);
  while($row = $result->fetch_assoc() ){

    echo '
     <div class="col-md-3" id="package">
          <form action="manage_cart.php" method="POST">
     <img src="images/'.$row["image"].'" alt="Avatar" class="images">
    <p style="font-size: 12px;margin:7% 0% 0% 2%;"><b>'.$row["ptitle"].'</b></p>
      <h4 style="padding-left: 28%; color:#6B8E23;"><b>Rs.'.$row["price"].'</b></h4>
  <div class="overlayer">
    <div class="text1">  <button type="submit" name="add_to_cart" class="btn btn-primary">Add To Cart</button></div>
    <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
  </div>
        </form>
        </div>';
  }
 
  $sql1="SELECT * FROM all_packages";
   $result = $conn->query($sql1);

   $cou=$result->num_rows;
    
   $a=$cou/9;
  


   echo "<br>"; echo "<br>"; echo "<br>"; echo "<center>";  echo '<a href="#" style="font-size:25px;">&laquo;</a>';
   for($b=1;$b<=$a;$b++)
   {

    ?><a href="All-packages.php?page=<?php echo $b; ?>" style="text-decoration: none;font-size: 25px;padding-left: 10px;"><?php echo $b."";  ?></a><?php
   }
   echo '<a href="#" style="font-size:25px;padding-left: 10px;">&raquo;</a>'; echo "</center>";
 ?>
  </div>
</div>
</div>
</div>
    <!-------------------------footer----------------------------------->
  <section class="footer" style="background-color:#fff; margin-top: 10%;color:#6B8E23; height: 60vh; border-top: 1px solid #6B8E23;">
         <div class="container text-center">
             <div class="row">
              <div class="col-md-3">
                     <h1>WELCOME TO MAXLAB</h1>
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

 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>