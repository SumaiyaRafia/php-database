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
<?PHP include 'title.php'?>
</head>
<body  background= "book.jpg" >

 	

	<center>
		<h1 style=" color: white; text-align:centre;">Please Book Your Dining Here-</h1>
	</center>
	

<center>
	
	<br>
    <br>
	<br>
	<br>
	<br>
	<br>
	

	<label for="date">Booking Date: </label>
<input type="date" id="date" name="date"
value="2021-01-01">


 <br>
 <br>

 <label for="person">Total Person-</label>
		<select id="person" name="person">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
			<option value="10">10</option>
		</select>

		<br>
	

	</center>
	<br>
	<br>
	<br>
	<center>
	<button onclick="window.location.href='Book-Dining.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Confirm</button>
<br>
<br>
<button onclick="window.location.href='dashboard.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Go Back</button>
<br>
<br>


<?php include 'logout_include.php';?>
	<br>
<br>	

	</center>
	
</form>
<font color="white">
<?php echo "Logged in as: $userid";?>
	</body>
</html>



