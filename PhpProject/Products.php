<!DOCTYPE HTML>
<html>
  <head>
    <title>LifeStyle Store</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <style>
        footer{
    background-color:rgb(0,0,0);   
    padding: 10px 0;
    color: whitesmoke;
    text-align:center;
    width:100%;
}
.pad{
    margin:0% 10% 0% 40%;
}

    </style>
  <body>
       <?php
       session_start();
       $email=$_SESSION['email'];
        include 'includes/Header.php';
        $con=mysqli_connect("localhost","root","","Chappal") or die(mysqli_errno($con));
        $items_query="Select * from items;";
        
        $check_query_items=mysqli_query($con,$items_query) or die(mysqli_error($con));
        
        //$users_query="Select * from users;";
        //$check_query_users=mysqli_query($con,$users_query);
        $row_count=4;
//        ?>
    <div class="container">
        <div class="jumbotron text-center " style="margin-top:80px;">
            <h1>Welcome to Now That's A Store</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt
               around, we have all in one place.</p>
        </div>
    </div>
      <div class="container">
      <?php while($row_items= mysqli_fetch_array($check_query_items)){
          
          if($row_count%4==0) {
          ?>
      
      <div class="row">
      <?php } ?>
         
      
          <div class="col-xs-3">
              <div class="thumbnail">
                  <img src="images/<?php echo $row_items['picname']?>" alt="image-thumbnail">
                  <div class="caption text-center">
                      <h3><?php echo $row_items['name']?></h3>
                      <p><?php echo "Rs.".$row_items['price']?></p>
                  <?php
                  if(isset($_SESSION['id'])){
                       
                       $id=$row_items['items_id'];
                       $users_items_query="Select * from users_items where items_id=$id AND user_id IN (select user_id from users where email='$email');";
                       $check_query_users_items= mysqli_query($con, $users_items_query);
                       $row_users_items= mysqli_fetch_array($check_query_users_items);
                       ?>
                      <?php echo "Item No.->".$id." "?> 
                      <a href="cart_script.php?id=<?php echo $id?>" class="btn-xs btn-primary">Add 2 Cart</a>
                      <?php echo " ".$row_users_items['amount']."<-Quantity"?>
                  <?php
                  }
                  else{
                  ?>
                      <a style="text-decoration: none; background-color: white; color: blue;" href="#" data-toggle="modal" data-target="#myloginmodal" class="btn-primary">Add To Cart</a>
                  <?php } ?>
                  </div>
              </div>
          </div>

        <?php 
        $row_count++;
        if($row_count%4==0)
        {?>
      </div>
      
      <?php
        }
         } ?>
      </div>          
        <?php
        include 'includes/Footer.php';
        ?>
    
  </body>
</html>