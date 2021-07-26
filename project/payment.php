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
<title>Payment</title>
</head>
<body  background= "payment.jpg" >
	<body>
<center>
	<br>
	<br>
	<font color="white">
<h1><?php echo $CURRENT_PAGE ?></h1>
</center>

<form action="paymethod.php" method="POST">

<br>
<br>
 <center style="font-family: 'Comic Sans MS';">

<label for="Payment" >Payment Type: </label>
<input type="radio" name="Payment" id="Cash" value="Cash" >
<label for="Cash">Cash</label>

<input type="radio" name="Payment" id="bKash" value="bKash" >
<label for="bKash">bKash</label>

<input type="radio" name="Payment" id="Credit Card" value="Credit Card" >
<label for="Credit Card">Credit Card</label>

 <br>
 <br>
<label for="username">User Name</label>
<input type="text" name="username" id="username" >
<br>
<br>

<label for="phone">Phone number: </label>
<input type="tel" id="phone" name="phone" >
<br>
<br>

<label for="PinNo">Pin No. (For Only bKash/Card)</label>
<input type="text" name="PinNo" id="PinNo">
<br>
<br>
</center>
<center>
<input style="font-family: 'Comic Sans MS'; color: darkblue; font-size : 15px; width: 200px; height: 30px; size: 2000px" type="submit" value="Submit">

</form>
<br>
<br>

		<button onclick="window.location.href='dashboard.php'" style="font-family: 'Comic Sans MS'; font-size: 15px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Go Back</button>
<br>
<br>


<?php include 'logout_include.php';?>
</center>
<font color="white">
<?php echo "Logged in as: $userid";?>
</body>
</html>