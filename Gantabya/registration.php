<?php
session_start();
header('location:login.html');

	//Get Form Data
	$fname = $_POST['fname'];
	$email= $_POST['email'];
	$pass= $_POST['pass'];
	$pnum= $_POST['pnum'];

	// Database connection
	$host='localhost';
	$username='root';
	$password='';
	$dbname = 'gantabya';

$connection=mysqli_connect($host,$username,$password, $dbname); 
if($connection){
			$user = mysqli_query($connection,"SELECT Email FROM userdetails WHERE Email='$email'");
			$res=mysqli_num_rows($user);
			if($res>0){
			}else{
			$query="INSERT INTO userdetails(Name, Email, Password, Phone) VALUES('$fname','$email','$pass','$pnum')";
			$result = mysqli_query($connection, $query);
			if($result){
			header('location:login.html');
			}
			else{
				echo "";
			}
			  }
				}
				 else{
					  header('location:signup.php');
					  }			
?>
