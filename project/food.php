<?php
session_start();
$userid= isset($_SESSION['uid'])? $_SESSION['uid']:"";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<title>food</title>
</head>
<form action="foodbook.php" method="POST">
<body  background= "event.jpg" >
	<center>
		<br>
		<h3 style="font-family: 'Comic Sans MS'; color: white; text-align:centre;">Choose your favourite cuisine here-</h3>
	</center>

<center>
	<br>
	<br>
	<br>
	
	<table border="5">
		<tr>
			<td>
				<img src="italian.jpg" width="250" height="250">
			</td>
			<td>
				<img src="chinese.jpg" width="250" height="250">
			</td>
			<td>
				<img src="indian.jpg" width="250" height="250">
			</td>

		
		
		<tr style="font-family: 'Comic Sans MS'; color: white; font-size : 20px;">
			<td> <input type="radio" name="food" id="Italian" value="Italian">
				<label for="Italian">Italian</label>

			</td>
			<td>
			<input type="radio" name="food" id="Chinese" value="Chinese">
				<label for="Chinese">Chinese</label> 
			</td>
			<td>
				<input type="radio" name="food" id="Indian" value="Indian">
				<label for="Indian">Indian</label> 
			</td>
			

			
			

		</tr>

		
	</table>
	<br>
	

	
	</center>
	<br>
	<center>
		<input style="font-family: 'Comic Sans MS'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="Confirm">

		</form>
		<br>
<br>

		<button onclick="window.location.href='dashboard.php'" style="font-family: 'Comic Sans MS'; font-size: 15px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Go Back</button>
<br>
<br>


<?php include 'logout_include.php';?>
	<br>
<br>

	</center>
<font color="white">
<?php echo "Logged in as: $userid";?>
	</body>
</html>