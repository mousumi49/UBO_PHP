<?php  session_start();   ?>
<!DOCTYPE html>
<html>
<head>
  <title>Expriment</title>
  <meta charset="utf-8" http-equiv="Content-Type" content="text/html">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-------------Style link------------------->
    <link rel="stylesheet"  href="Styles.css">
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
   .thumbnail{
  width: 135%;
  align-items: center;
  justify-content: space-around;
    border: 2px solid #228b22;
 }
 .thumbnail a{
  text-decoration: none;
  font-size: 15px;
    padding-left: 17px;
  font-weight: bold;
  color: #ff8c00;
 }
 .thumbnail p{
  color:#000;
  font-size: 20px;
  font-weight: bold;
  padding-left: 10%;
  padding-top: 18px;
 }
 .thumbnail button{
  margin: 5px 0px 20px 10%;
 }
  #price-list  li a{
   text-decoration: none;
   font-size: 12px;
   color: #ff8c00;
 }

#price-list ul{
  list-style: none;
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
            <li><a href="#"><span class="glyphicon glyphicon-calendar" ></span> Test/Packages</</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-share" ></span> Report</</a></li>
            
            <?php 
            $count=0;
            if(isset($_SESSION['cart']))
            {
              $count=count($_SESSION['cart']);
            }
            ?>
             <li><a href="my_cart.php"><span class="glyphicon glyphicon-shopping-cart"><span id="badge" style="background:#ff8c00;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;"><?php echo $count; ?></span></span></a></li>
           </ul>
  

</div>


  <div style="padding:0px 0px 1600px;font-size:30px">
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
             <li><a href="my_cart.php"><span class="glyphicon glyphicon-shopping-cart"><span id="badge" style="background:#ff8c00;
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
      $page1=($page*8)-8;
    }

  ?>
<div class="container">
     <div class="row" style="margin-left: 2%;">
      <div class="col-md-3" id="price-list">
      <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>All Tests</li>
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
        <div class="row" >
<?php
  $sql="SELECT * FROM `all_test`  LIMIT $page1, 8 ";
   $result = $conn->query($sql);
  while($row = $result->fetch_assoc() ){

    echo '
     <div class="col-md-4 col-md-offset-1" >
          <form action="manage_cart.php" method="POST">
       <div class="thumbnail">
        <a href="front_test_pg.php?id='.$row["id"].'">'.$row["ptitle"].'</a>
        <p >Rs. '.$row["price"].'</p>
       <button type="submit" name="add_to_cart" class="btn btn-success">Add To Cart</button>
       <input type="hidden" name="Item_id"  value="'.$row["id"].'">
         <input type="hidden" name="Item_Name" value="'.$row["ptitle"].'">
         <input type="hidden" name="Price"  value="'.$row["price"].'">
        </div>
        </form>
        </div>';
  }
 
  $sql1="SELECT * FROM all_test";
   $result = $conn->query($sql1);

   $cou=$result->num_rows;
   $a=$cou/8;
   


   echo "<br>"; echo "<br>"; echo "<br>"; echo "<center>";  echo '<a href="#" style="font-size:25px;color:#228b22">&laquo;</a>';
   for($b=1;$b<=$a;$b++)
   {

    ?><a href="All-tests.php?page=<?php echo $b; ?>" style="text-decoration: none;font-size: 25px;padding-left: 10px;color: #ff8c00;"><?php echo $b."";  ?></a><?php
   }
   echo '<a href="#" style="font-size:25px;padding-left: 10px; color:#228b22;">&raquo;</a>'; echo "</center>";
 ?>
  </div>
</div>
</div>
</div>
<section class="footer" style="background-color:#fff; margin-top: 20%;color:#6B8E23; height: 60vh; border-top: 1px solid #6B8E23;">
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