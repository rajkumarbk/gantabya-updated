<?php
$origin = $_POST['origin'];
$destination = $_POST['destination'];
$date = $_POST['date'];

   $host='localhost';
	$username='root';
	$password='';
	$dbname = 'gantabya';

$connection=mysqli_connect($host,$username,$password, $dbname);
if($connection){
   $sql= "INSERT INTO passenger(origin, destination, date) VALUES ('$origin','$destination', '$date')";
   $result= mysqli_query($connection, $sql);
if($result){
    header('Location:deluxe.html');
     die();
}else{
   header('Location:hire-me.php');
}
}else{
   echo "Connection failed!";
}
?>
