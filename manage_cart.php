<?php
session_start(); 
 
 

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(isset($_POST['add_to_cart']))
    {
      if(isset($_SESSION['cart']))
      {
        $myitems = array_map($_SESSION['cart'], 'Item_Name');
          if(in_array($_POST['Item_Name'],$myitems))
          {
            echo"<script>
            alert('item already added');
            window.location.href='All-tests.php';
            </script>";
          }
           else{
        $count = count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity'=>1);
       echo"<script>
            alert('item added');
            window.location.href='Mainpage.php';
            </script>";
          }
      }
      else
      {
        $_SESSION['cart'][0]=array('Item_Name' => $_POST['Item_Name'], 'Price' => $_POST['Price'], 'Quantity'=>1);
         echo"<script>
            alert('item added');
            window.location.href='Mainpage.php';
            </script>";
       }
    }

 
   }




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
 


 echo $id=$_POST["Item_id"];
 echo $Item_Name=$_POST["Item_Name"];
  echo $Price=$_POST["Price"]; 

  $sql= "INSERT INTO `add-to-cart`(pname, price, pid)
   VALUES('$Item_Name','$Price', '$id')";

  $query=$conn->query($sql);

 if(!$query)
   
   
       
   {
   echo '<script>alert("Data not updated '.$conn->error.'");  window.location="index.php";</script>';
   }

     else
   {
    echo'<script>alert("data added successfully"); window.location="All-tests.php";</script>';
   
   }
   $conn->close();


?>
    
  