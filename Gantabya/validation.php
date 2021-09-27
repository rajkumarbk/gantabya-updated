<?php 
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'gantabya');

$email = $_POST['email'];
$pass = $_POST['pass'];

$s = "SELECT * FROM userdetails WHERE Email='$email' && Password='$pass'";

$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
 if ($num==1) {
 	$_SESSION['email'] = $email;
 	header('location:hire-me.php');
 }else{
 	
 	header('location:login.html');
 }

 ?>