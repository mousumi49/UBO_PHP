<?php
   // Start the Session
   session_start();

  

  // include "dbconn.php";
   $servername = "localhost";
$username ="root";
$password = "";
$database="packages";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);

   $sql="SELECT id,fname FROM `users`";
   $result=$conn->query($sql);

     while($row=$result->fetch_assoc()){
        
   

    $_SESSION["fname"]=$row["fname"];
   $_SESSION["id"]=$row["id"];
    $_SESSION["cart_qty"]=$row["cart_qty"];
   $_SESSION["wish_qty"]=$row["wish_qty"];
   
  }
  
   ?>

