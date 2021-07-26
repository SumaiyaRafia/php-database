<?php
session_start();
?>

<?php 
    include "config.php";
	define("filepath", "data.json");
	$userName = $password = "";
	$isValid = true;
	$userNameErr = $passwordErr = "";
	$uid = "";

	if(isset($_COOKIE['uid'])) {
		$uid = $_COOKIE['uid'];
	}

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$userName = $_POST['username'];
		$password = $_POST['password'];
		if(empty($userName)) {
			$userNameErr = "Required!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "Required!";
			$isValid = false;
		}
		if($isValid) {
			$user_data = read();
			$user_data_array = explode("\n", $user_data);
			$found = false;
			for($i = 0; $i < count($user_data_array) - 1; $i++) {
				$user_data_array_decode = json_decode($user_data_array[$i]);
				if($userName === $user_data_array_decode->username &&
				$password === $user_data_array_decode->password) {
					$found = true;
					break;
				}
			}

			if($found) {
				if(isset($_POST['rememberme'])) {
					setcookie("uid", $userName, time() + 60*60*24*30);
				}
				session_start();
				$_SESSION['uid'] = $userName;

				header("Location: dashboard.php");
			}
		}
	}

	function read() {
		$resource = fopen(filepath, "r");
		$fz = filesize(filepath);
		$fr = "";
		if($fz > 0) {
			$fr = fread($resource, $fz);
		}
		fclose($resource);
		return $fr;
	} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?PHP include 'title.php'?>
</head>
<body  background= "login.jpg">
<body>
<center>
	 <br>
            <br>
            <br>
            <br>
            <br>
            <br>
	<font color="white">
	<h1><?php echo $CURRENT_PAGE ?></h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">


			<h4>Sign in with your registered username and password-</h4>
			

			<label for="username">Username:</label>
			<input type="text" name="username" id="username" value="<?php echo $uid; ?>">
			<span style="color:red"><?php echo $userNameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>

			<input type="checkbox" name="rememberme" id="rememberme">
			<label for="rememberme">Remember Me:</label>

			<br><br>

			<input style="font-family: 'Comic Sans MS'; color: black; font-size : 15px; width: 200px; height: 30px;" type="submit" value="LOGIN">
		</fieldset>
	</form>

	<br>
<button onclick="window.location.href='registration-form.php'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Create new account</button>
<br>
<br>
<button onclick="window.location.href='welcome.html'" style="font-family: 'Comic Sans MS'; font-size: 18px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Homepage</button>
</center>
</body>
</html>