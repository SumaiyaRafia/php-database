<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<font color="white">
		<br>
            <br>
	<?PHP include 'title.php'?>
</head>
<body  background= "reg.jpg">
<body>

	<?php
	session_start();
	session_destroy();
	$file=fopen("data.json","w");
	$json= json_decode("$file");

	unset($json);
?>
<center>
<h1><span style="color:white">account deleted!</span></h1>
<br>
<button onclick="window.location.href='welcome.html'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Homepage</button>
</center>
</body>
</html>