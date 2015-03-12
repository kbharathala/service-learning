<?php session_start();

$dbusername = "root";
$password = "";
$hostname = "localhost"; 
$db = "service";

//connection to the database
$con = mysqli_connect($hostname, $dbusername, $password, $db);

$_SESSION['username'] = $_GET["username"];
$username = $_SESSION['username']; 

$result = mysqli_query($con, "SELECT password FROM password WHERE username = '$username'");

while($row = mysqli_fetch_array($result))
  {
  $password = $row['password'];
  }

 if($password == $_GET["password"])
 {
	header("Location: service.php");
 }
 else
 {
	$_SESSION['valid_pass'] = "invalid";
	header("Location: index2.php");
 }
  
  
  
?>