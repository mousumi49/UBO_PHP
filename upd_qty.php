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

$cartid=$_POST['cart_id'];
$qty=$_POST['qty'];

$sql="UPDATE `add-to-cart` SET qty='$qty' WHERE id='$cartid'";
$conn->query($sql);


?>
 <table class="table" style="background: #fff">
        <thead>
          
          <th>Item Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>
        </thead>
        <tbody>
       <?php 
            $st=0;
            
            $sel="SELECT * FROM `add-to-cart`";
            $rs=$conn->query($sel);
            while ($row=$rs->fetch_assoc()) {
              $pid=$row['pid'];
              $selp="SELECT * FROM `all_test` WHERE id='$pid'";
              $rsp=$conn->query($selp);
              while($rowp=$rsp->fetch_assoc()){
                $st =$st+($row['qty']*$row['price']);
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
          <h3>Total:</h3>
          <h5><?php echo $st; ?></h5>
        </div>
