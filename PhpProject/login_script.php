<?php
$con= mysqli_connect("localhost", "root", "", "Chappal") or die(mysqli_error($con));
$email=$_POST['email'];
$password=$_POST['password'];
$user_check_query="Select password,name,email from users where email='$email'";
$LOGIN=mysqli_query($con, $user_check_query) or die(mysqli_error($con));
$pass2= mysqli_fetch_array($LOGIN);
if(strcasecmp($pass2['password'],$password)==0)
{ session_start();
$_SESSION['name']=$pass2['name'];
$_SESSION['email']=$pass2['email'];
$_SESSION['id']= mysqli_insert_id($con);
include 'Products.php';
}
else
{    
echo $pass2['password']." ".$password;
die("Wrong Password  , Try Again...");
}
?>
