<?php
session_start();
$con=mysqli_connect("localhost","root","","Chappal") or die(mysqli_errno($con));
$email=$_SESSION['email'];
$query="select * from users where email='$email';";
$old=$_POST['OldPassword'];
$new=$_POST['NewPassword'];
$PasswordChange= mysqli_query($con, $query);
$row= mysqli_fetch_array($PasswordChange);
if(strcmp($old,$row['password']==0))
{
    $query_2="update users set password='$new' where email='$email';";
    mysqli_query($con,$query_2);
    include 'Products.php';
}
else
{
    echo $row['password']." ".$old." Wrong Password";   
}
?>

