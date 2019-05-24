<?php
$con= mysqli_connect("localhost", "root", "", "Chappal") or die(mysqli_error($con));
$email=$_POST['email'];
$name=$_POST['name'];
$password=$_POST['password'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$address=$_POST['address'];
$sex=$_POST['sex'];

$user_signup_query="insert into users(email,name,password,number,city,address,sex) values('$email','$name','$password','$contact','$city','$address','$sex') ";
$SUBMIT=mysqli_query($con, $user_signup_query) or die(mysqli_error($con));
session_start();
$_SESSION['name']=$name;
$_SESSION['email']=$email;
$_SESSION['id']= mysqli_insert_id($con);
include 'Products.php';

?>

