<?php

 //$a=$_GET['id'];
// echo $a; exit;
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username

$db_pass = 'clnvikas123'; // Password
$db_name = 'registration'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

 $username = $_POST['username'];
  $email =  $_POST['email'];
  $id1 =  $_POST['id1'];
 
  $password_1 =  $_POST['password_1'];
  $password_2 =$_POST['password_2'];

$sql = "update  users set username ='$username', email='$email' where id=$id1";

$c= mysqli_query($conn, $sql);
if($c)
{
	header("location:displaying_data.php");

}
else
{
echo"not updated";
}