<?php session_start(); ?>

<!DOCTYPE html>

<html>
<head>
  <title>Service</title>
  <link href="Site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Your Service</h1> 

<?php
$dbusername = "root";
$password = "";
$hostname = "localhost"; 
$db = "service";

//connection to the database
$con = mysqli_connect($hostname, $dbusername, $password, $db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$username = $_SESSION['username'];

$result = mysqli_query($con, "SELECT FullName FROM password WHERE username = '$username'");

while($row = mysqli_fetch_array($result))
  {
  $fullname = $row['FullName'];
  }
 
echo ("Welcome $fullname! Here is your full service learning record."); 
echo("<br>"); 
echo("<br>"); 
  
$result = mysqli_query($con,"SELECT Location, Hours, Date FROM Service where username = '$username'");

echo "<table border='1'>
<tr>
<th>Location</th>
<th>Hours</th>
<th>Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['Location'] . "</td>";
  echo "<td>" . $row['Hours'] . "</td>";
  echo "<td>" . $row['Date'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

<p>

<a href="addservice.php"><button>Add Service</button></a> 

<button name = "printer" type="button" onclick=print()>Print</button>

</body>

</div>

</html>