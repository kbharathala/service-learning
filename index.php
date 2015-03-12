<?php 
	session_start();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);
?>

<html>
<head>
<title>PHP Demo</title>
<link href="Site.css" rel="stylesheet">

</head>

<body>

<div id="main">

<h1>Service Learning Form</h1> 

<form name = "userName" action="validate.php" method="get">
User Name: <input type="text" name="username" required><br>
Password: <input type="password" name="password" required><br>
<input type="submit" value = "Login">
</form>

<a href="register.php"> <button>Register Now</button></a> <br>

<?php $_SESSION['username'] = ""; ?>

<?php include("footer.php"); ?>

</div>

</body>
</html> 