<?php

session_start();

$username = "root";
$password = "";
$hostname = "localhost"; 
$db = "service";

//connection to the database
$con = mysqli_connect($hostname, $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$userName = $_SESSION['username'];

$result = mysqli_query($con, "SELECT FullName FROM password WHERE username = '$userName'");

while($row = mysqli_fetch_array($result))
  {
  $fullname = $row['FullName'];
  }
 
 echo ($fullname);

$sql="INSERT INTO service (FullName, hours, username, location, date)
VALUES('$fullname','$_POST[hours]','$userName', '$_POST[location]','$_POST[date]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
// echo "1 record added";

header("Location: service.php");

mysqli_close($con);
?>

</body>

</div>

</html>