<?php
session_start();
?>
<?php 
    include "config.php";
	define("filepath", "data.json");
	$fullName = $userName = $password = "";
	$isValid = true;
	$fullNameErr = $userNameErr = $passwordErr = "";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$fullName = $_POST['fullname'];
		$userName = $_POST['username'];
		$password = $_POST['password'];
		if(empty($fullName)) {
			$fullNameErr = "Required!";
			$isValid = false;
		}
		if(empty($userName)) {
			$userNameErr = "Required!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "Required!";
			$isValid = false;
		}
		if($isValid) {
			$fullName = test_input($fullName);
			$userName = test_input($userName);
			$password = test_input($password);

			$arr1 = array('fullname' => $fullName, "username" => $userName, "password" => $password);
			$arr1_encode = json_encode($arr1);
			$response = write($arr1_encode);
			if($response) {
				$successfulMessage = "Successfully saved.";
			}
			else {
				$errorMessage = "Error while saving.";
			}
		}
	}
	function write($content) {
			$resource = fopen(filepath, "a");
			$fw = fwrite($resource, $content . "\n");
			fclose($resource);
			return $fw;
	}
	function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
	}
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
<center>
	<h1><?php echo $CURRENT_PAGE ?></h1>
    <font color="white">
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
			<label for="fullname" >Full Name:</label>
			<input type="text" name="fullname" id="fullname">
			<span style="color:red"><?php echo $fullNameErr; ?></span>

			<br><br>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
			<span style="color:red"><?php echo $userNameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>

			<input style="font-family: 'Comic Sans MS'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="SIGN UP">
		
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>

	<button onclick="window.location.href='login.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 30px;  color: black;  background: Orange; border-color:black;">Go back to Login</button>
	<br>
	<br>
	
</center>
</body>
</html>