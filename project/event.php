<?php
session_start();
$userid= isset($_SESSION['uid'])? $_SESSION['uid']:"";
?>
<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<?PHP include 'title.php'?>
</head>
<form action="eventbook.php" method="POST">
<body  background= "event.jpg" >
	<center>
		<br>
		<h3 style="font-family: 'Comic Sans MS'; color: white; text-align:centre;">Choose your event here-</h3>
	</center>

	
<center>
	<br>
	<br>
	<br>
	
	<table border="5">
		<tr>
			<td>
				<img src="wedding.jpg" width="250" height="250">
			</td>
			<td>
				<img src="birthday.jpg" width="250" height="250">
			</td>
			<td>
				<img src="meeting.jpg" width="250" height="250">
			</td>

		</tr>
		<label for="event" > </label>
		<tr style="font-family: 'Comic Sans MS'; color: white; font-size : 18px;">

			<td>2000 BDT</td>
			<td>1000 BDT</td>
			<td>2500 BDT</td>
			
			

		</tr>
		
		<tr style="font-family: 'Comic Sans MS'; color: white; font-size : 20px;">
			<td> <input type="radio" name="event" id="Wedding" value="Wedding">
				<label for="Wedding">Wedding Booking</label>

			</td>
			<td>
			<input type="radio" name="event" id="Birthday Party" value="Birthday Party">
				<label for="Birthday Party">Birthday Booking</label> 
			</td>
			<td>
				<input type="radio" name="event" id="Meeting" value="Meeting">
				<label for="Meeting">Meeting & Conference Booking</label> 
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