

<?php  session_start();           ?>



<!DOCTYPE html>
<html>
<head>
  <title>My Cart</title>
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
 
.payment{
  border:1px solid #ddd;
  padding: 6%;
}
.payment h5{
  
}
</style>
<body>
<div id="navbar">
  <span class="logo1"><img src="images/Max-Lab-Logo.png"></span>
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
             <li><a href="my_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background: red;
    border-radius: 50%;font-size: 15px;padding: 4px  7px;"><?php echo $count; ?></span></a></li>
           </ul>
  

</div>


  <div style="padding:0px 0px 2250px;font-size:30px">
  <div class="top-nav-bar">
        <div class="search-box">
            
            
            <a class="logo" href="#"  style="color: #fff; text-decoration: none"><img src="images/Max-Lab-Logo.png"></a>
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
             <li><a href="my_cart.php"><span class="glyphicon glyphicon-shopping-cart"></span><span id="badge" style="background: red;
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

  <!-----------------------------------contain------------------------>
         <?php
//include "dbconn.php";
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
   ?>
  <div class="container">
     <div class="row" >
      <div class="col-md-12" >
      <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>My Cart</li>
        </ul>
        <h2>MY CART</h2>
        </div>
        <div class="col-md-8">
          <table class="table" style="font-size: 12px;">
    <thead >
      <tr>
        
          <th>Item Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody >

      <?php 
            $st=0;
            
            $sel="SELECT * FROM `add-to-cart`";
            $rs=$conn->query($sel);
            while ($row=$rs->fetch_assoc()) {
              $pid=$row['pid'];
              $selp="SELECT * FROM `all_test` WHERE id='$pid'";
              $rsp=$conn->query($selp);
              while($rowp=$rsp->fetch_assoc()){
                $st =$st + ($row["qty"] * $row["price"]);
          ?>
          <tr>
            
            <td><?php echo $row["pname"] ; ?></td>
            <td>
              <form id="frm<?php echo $row["id"] ; ?>">
                <input type="hidden" name="cart_id" value="<?php echo $row["id"] ; ?>">
                <input type="number" name="qty" value="<?php echo $row["qty"] ; ?>" onchange="updcart(<?php echo $row["id"] ; ?>)"
                style="width:60px;" start="1">
              </form>
            </td>
            <td><?php echo $row["price"] ; ?></td>
            <td><?php echo $row["qty"]* $row["price"] ; ?></td>
            <td><form action="delete.php" method="POST">
              <input type="hidden" name="id" value='<?php echo $row["id"] ; ?>'>
              <input type="submit" name="submit" class=" btn btn-success" value="Delete">
              <?php
               if(isset($_SESSION['cart']))
           {
       foreach($_SESSION['cart'] as $key => $value)
         {
            echo   "<input type='hidden' name='Item_Name' value='$value[Item_Name]'>";
          }
        }
        ?>
            </form></td>
          </tr>
        
          <?php 
          }
        }
          ?>
            </tbody>
  </table>
        </div>
        <div class="col-md-4">
          <div class="payment">
          <h3>Summary:</h3><hr>
          <h5>Sub Total:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.<b> Rs.<?php echo $st; ?></b></h5>
          <h5>Zero Collection Charges&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.0.00</h5><hr>
          <h4>Order Total:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Rs. <?php echo $st; ?></b></h4>
          <form>
            <button class="btn btn-success btn-block">MAKE PAYMENT</button>
          </form>
        </div>
        </div>
      
      </div>
   </div><br><br>
   
    






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

   <script type="text/javascript">
    function updcart(id){
      $.ajax({
        url:'upd_qty.php',
        type:'POST',
        data:$("#frm"+id).serialize(),
        success:function(res){
          $("#crt_table").html(res);
        }
      });
    }
  </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="jquery-3.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>