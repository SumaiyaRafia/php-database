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
<center>
	<font color="white">
<h1><?php echo $CURRENT_PAGE ?></h1>
</center>
<body background= "dash.jpg">


<font size="5">
<center>
	<font color="white">

</center>
</font>


	<br>
	


 

 
<center>
<button onclick="window.location.href='book.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Book Dining</button>
<br>
<br>

<button onclick="window.location.href='food.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">View Food Menu</button>
<br>
<br>

<button onclick="window.location.href='event.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 60px;  color:black;  background:white; border-color:black;">Choose event/Book Event</button>
<br>
<br>

<button onclick="window.location.href='feedback.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Feedback</button>
<br>
<br>

<button onclick="window.location.href='payment.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Payment Method</button>
<br>
<br>

<button onclick="window.location.href='cpass.html'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Change Password</button>
<br>
<br>

<button onclick="window.location.href='dAccount.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 40px;  color:black;  background:white; border-color:black;">Delete Account</button>

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