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

  <div class="container">
     <div class="row" >
      <div class="col-md-12" >
      <ul class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li>My Cart</li>
        </ul>
        <h2>MY CART</h2>
        </div>
        <div class="col-md-9">
          <table class="table" style="font-size: 12px;">
    <thead >
      <tr>
        
          <th>Item Id</th>
          <th>Iten Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
          <th>Action</th>
      </tr>
    </thead>
    <tbody >
      <?php 
         
          if(isset($_SESSION['cart']))
           {
       foreach($_SESSION['cart'] as $key => $value)
         {
          $sr=$key+1;
     

      echo " <tr>
         <td>$sr</td>
         <td>$value[Item_Name]</td>
         <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
         <td><input  class='iquantity' onchange='subTotal()' type='number' value='$value[Quantity]' min='1'></td>
         <td class='itotal'> </td>
         <td>
         <form action='delete.php' method='POST'>
         <button name='remove_item' type='submit' class='btn btn-sm btn-danger'>Remove</button>
         <input type='hidden' name='Item_Name' value='$value[Item_Name]'>

        
        </form>
         </td>
       </tr>";
     }
       }
       ?>

      
      </tbody>
  </table>
        </div>
        <div class="col-md-3">
          <div class="payment">
          <h3>Summary:</h3><hr>
          <h4 id="gtotal"></h4>
          
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
   var gt=0;
  var iprice=document.getElementsByClassName("iprice");
  var iquantity=document.getElementsByClassName("iquantity");
  var itotal=document.getElementsByClassName("itotal");
  var gtotal=document.getElementById("gtotal");
  
  function subTotal()
  {
    gt=0;
    for (i = 0;i<iprice.length;i++) {
      itotal[i]=parseInt(iprice[i].value)*parseInt(iquantity[i].value);
      gt=gt+parseInt(iprice[i].value)*parseInt(iquantity[i].value);
    }
    gtotal.innerText=gt;
  }

  subTotal();
</script>

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