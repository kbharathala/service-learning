<?php session_start(); ?>

<html>
<head>
  <title>Add Service</title>
  <link href="Site.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Add Service</h1>

<form action="insert.php" method="post">
Date: <input type="date" name="date"><br>
Hours: <input type="number" name="hours"><br>
Service Learning Site Name: <input type="text" name="location"><br>
Address: <input type="text" name="address"><br>	
Telephone #: <input type="text" name="tele"><br>	
Site Supervisor (person in charge): <input type="text" name="sup_name"><br>
Site Supervisor's Telephone #: <input type="text" name="sup_tele"><br>
<TEXTAREA NAME="Address" ROWS=3 COLS=30 >
</TEXTAREA>
<input type="submit">
</form>

<a href="service.php"><button>Cancel</button></a>

</body>

</div>

</html>