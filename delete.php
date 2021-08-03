
<?php

 session_start();
 

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
     if(isset($_POST['submit']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
          if($value['Item_Name']==$_POST['Item_Name'])
          {
          unset($_SESSION['cart'][$key]);
          $_SESSION['cart']=array_values($_SESSION['cart']);
          echo "<script>
            alert('item removed');
            window.location.href='cart.php';
            </script>";
        }
      }
    }
  }


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
    
   if(isset($_REQUEST['submit'])){
    $query ="DELETE FROM `add-to-cart` WHERE id = {$_REQUEST['id']}";
    if(mysqli_query($conn,$query))
{
     
   
    echo '<script>alert("Record deleted successfully"); window.location="cart.php";</script>';
  
  
} else {

  echo '<script>alert("Record not deleted "); window.location="Mainpage.php";</script>';

}
}









?>