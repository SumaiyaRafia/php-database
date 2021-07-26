<?php
session_start();
?>



<?php
	define("filepath", "data.json");

	$password = "";
	$passwordErr = "";

	$successfulMessage = $errorMessage = "";

	$flag = false;

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		
		if(empty($_POST['password'])) {
			$passwordErr = "Required!";
			$flag = true;
		}

		if(!$flag)
		{
			$password = $_POST['password'];

			$password = test_input($password);

			$json_object= file_get_contents('data.json');
			$data = json_decode($json_object, true);
			$data['password'] =$password;

			$data_encode = json_encode($data);
			$result1= write($data_encode);

			if($result1)
			{
				$successfulMessage= "Password updated successfully";
			}

			else
			{
				$errorMessage ="Error while updating";
			}
		}
	}

		?>

<!DOCTYPE html>
<html>
<head>
<title>Change Password</title>
</head>
<body  background= "pass.jpg">
<center>
	<br>
<h1 style="text-align:centre; color: white; size: 1500px">New Password</h1>
</center>

<font size="5"; color="white">
<form action="" method="POST">
	<br>
	<br>




 <center>


<label for="password">Confirm Password:</label>
<input type="password" name="password" id="password" required>
<br>
<br>
</center>

</b>
<center>
<input style="font-family: 'Cooper Black'; font-size : 15px; color: black; size: 1500px" type="submit" value="Ok">

</center>
</form>
</font>



</body>
</html>