<?php
session_start();
$con=mysqli_connect("localhost","root","","Chappal") or die(mysqli_errno($con));
//echo "id is ".$_GET['id'];
$id=$_GET['id'];
$email_cart2=$_SESSION['email'];
$query_cart="select status,amount from users_items WHERE items_id='$id' AND user_id IN (select user_id from users where email='$email_cart2');";
$query_go= mysqli_query($con, $query_cart) or die(mysqli_error($con));
$rows= mysqli_num_rows($query_go);
//echo $rows;
$cart=mysqli_fetch_array($query_go);
$status=$cart['status'];
$query_email="Select user_id from users where email='$email_cart2';";
$query_exe= mysqli_query($con, $query_email);
$result_fetch= mysqli_fetch_array($query_exe);
$user_id=$result_fetch['user_id'];
//echo $cart['status'];
if($status==2)
{
  //  echo 'This is if';
    $quant=$cart['amount'];
    $query_cart1="update users_items set amount=$quant+1 where items_id=$id;";
    //echo $quant." ".$cart['amount'];
    mysqli_query($con,$query_cart1) or die(mysqli_error($con));
}
else
{
  //  echo 'This is else';
    $query_cart2="INSERT INTO `users_items` (`id`, `user_id`, `items_id`, `amount`, `status`) VALUES (NULL, '$user_id', '$id', '1', '2');";
    mysqli_query($con, $query_cart2) or die(mysqli_error($con));

}
include 'Products.php';
?>