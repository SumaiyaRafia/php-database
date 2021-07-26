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
<title>Login</title>
</head>
<body  background= "feedback.jpg" >
	
<center>
	<br>
	<br>
	<br>
    <br>

<h1 style=" font-family: 'Comic Sans MS'; color: white; text-align:center;">Feedback</h1>
</center>

<font size ="5" color="black">


<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
</head>

<center>
	

</center>


</body>
</html>
	
  <form  action="feedrate.php" method="POST">

 <center>

<br>
<br>


<label for="complain"></label>
<textarea name="complain" id="complain" rows="8" cols="100" placeholder="Complain Box"></textarea>
<br>
<br>
<br>
<font size="5">
	<font color="white">
<label for="rating" >Rating: </label>
<input type="radio" name="rating" id="one" value="1" >
<label for="one">1</label>

<input type="radio" name="rating" id="two" value="2" >
<label for="two">2</label>

<input type="radio" name="rating" id="three" value="3" >
<label for="three">3</label>

<input type="radio" name="rating" id="four" value="4" >
<label for="four">4</label>

<input type="radio" name="rating" id="five" value="5" >
<label for="five">5</label>

</font>


</center>

<center>
	<br>
<input style="font-family: 'Comic Sans MS'; color: black; font-size : 15px; width: 80px; height: 30px;" type="submit" value="Submit">
<br>
<br>
<?php include 'logout_include.php';?>

</center>
</form>
</font>

<font color="white">
<?php echo "Logged in as: $userid";?>

</body>
</html>