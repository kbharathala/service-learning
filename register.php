<?php session_start(); ?>

<html>
<head>
  <title>Add Service</title>
  <link href="Site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Register</h1>

<form action="register.php" method="post">
First Name <br><input type="text" name="firstname"><br>
Last Name <br><input type="text" name="lastname"><br>
Student ID number <br><input type="text" name="Username"><br>
Password <br><input type="password" name="Password"><br>	
Confirm Password <br><input type="password" name="confirm"><br>
Email <br><input type="text" name="email"><br>
Confirm Email <br><input type="text" name="email"<br>		
<br><br><input type="submit">
</form>

<a href="index.php"><button>Cancel</button></a>

</body>

</div>

</html>