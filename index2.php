<?php session_start();?>

<html>
<head>
<title>PHP Demo</title>
<link href="Site.css" rel="stylesheet">

</head>

<body>

<div id="main">

<h1>Service Learning Form</h1> 

<span style="color:#ff0000"> Wrong Username/Password Combination. Try again. </span> 

<br>

<form name = "userName" action="validate.php" method="get">
User Name: <input type="text" name="username" required><br>
Password: <input type="password" name="password" required><br>
<input type="submit" value = "Login">
<a href="register.php"> <button>Register</button></a> <br>

</form>

<?php $_SESSION['username'] = ""; ?>

<?php include("footer.php"); ?>

</div>

</body>
</html> 