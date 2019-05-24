<?php
//session_start();
$email_cart=$_SESSION['email'];
$con= mysqli_connect("localhost", "root", "", "Chappal") or die(mysqli_error($con));
$query="select * from items where items_id IN (select items_id from users_items where user_id IN (select user_id from users where email='$email_cart') AND status=2 AND amount>0);" or die(mysqli_error($con));
$query_check=mysqli_query($con,$query);
$money=0;
?>
<div class="modal fade" id="mycartmodal" style="margin-top:5%">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 style="text-align: left">Cart</h2>
            </div>   
            <div class="modal-body">
                
                    <div class="container">
          <table class="table text-center table-hover table-bordered" style="margin-top:100px; text-align:center; table-layout: fixed; width: 47%;">
              <tr><th> Item Code </th><th> Item Name </th><th> Price </th><th> Quantity </th><th> Thumbnail </th></tr>
              
                  <?php
                  
                  while($row=mysqli_fetch_array($query_check)){
                      $item_id= $row['items_id'];
                  $query_quantity="select amount from users_items where items_id='$item_id';";
                  $check_query=mysqli_query($con,$query_quantity);
                  $row_quantity=mysqli_fetch_array($check_query);
                  
                      ?>
                  <tr>
                      <td><?php echo $row['items_id'] ?></td><td><?php echo $row['name'] ?></td><td><?php echo $row['price'] ?></td><td><?php echo $row_quantity['amount'] ?></td>
                      <td>
                          <div class="thumbnail">
                              <img src="images/<?php echo $row['picname']?>" alt="image-thumbnail">
                          </div>
                      </td>
                  </tr>
                  <?php 
                  $quantity=$row_quantity['amount'];
                  $price=$row['price'];
                  $money=$money+$price*$quantity;
                  //mysqli_data_seek($row_quantity, 0);
                  } ?>
              
              <tr>
                  <td></td><td>Total</td><td>Rs.<?php echo $money?></td>
                  <td>
                  </td>
              </tr>
          </table>
      </div>  
                <a href='Success.html' class="btn btn-primary">Proceed 2 Checkout</a>
                    
            </div>
        </div>
    </div>
</div>

