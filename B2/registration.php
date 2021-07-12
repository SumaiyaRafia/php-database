<?php 
	
	require 'dbInsert.php';
	$fName = $lName = $gender = $DOB = $religion = $email = $userName = $password = "";
	$isValid = true;
	$fNameErr = $lNameErr = $GenderErr = $DOBErr = $religionErr = $emailErr= $userNameErr = $passwordErr = "";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$fName = $_POST['fname'];
    	$lName = $_POST['lname'];
    	$gender = $_POST['gender'];
    	$DOB = $_POST['DOB'];
    	$religion = $_POST['religion'];
    	$email = $_POST['email'];
    	$userName = $_POST['username'];
		$password = $_POST['password'];
    	 
    	 if(empty($fName)) {
           $fNameErr = "REQUIRED!";
           $isValid = false;
    	 }
    	
    	 
    	 if(empty($lName)) {
           $lNameErr = "REQUIRED!";
           $isValid = false;
    	 }
 
    	 
    	 if(empty($Gender)) {
           $GenderErr = "REQUIRED!";
           $isValid = false;
    	 }

    	 
    	 if(empty($DOB)) {
           $DOBErr = "REQUIRED!";
           $isValid = false;
    	 }

    	 
    	 if(empty($religion)) {
           $religionErr = "REQUIRED!";
           $isValid = false;
    	 }
    	

    	 
    	 if(empty($Email)) {
           $EmailErr = "REQUIRED!";
           $isValid = false;
    	 }

		if(empty($userName)) {
			$userNameErr = "REQUIRED!";
			$isValid = false;
		}
		if(empty($password)) {
			$passwordErr = "REQUIRED!";
			$isValid = false;

		}
		if($isValid) {
			$fName = test_input($fName);
			$lName = test_input($lName);
			$Gender = test_input($Gender);
			$DOB = test_input($DOB);
			$religion = test_input($religion);
			$Email = test_input($Email);
			$userName = test_input($userName);
			$password = test_input($password);

			
			$response = register($fName, $lName,$Gender,$DOB,$religion,$Email,$userName,$password );
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
<form action="login-form.php" method="POST">
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
</head>
<body>

	<h1>Registration Form</h1>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<fieldset>
			<legend>Registration Form:</legend>

			<label for="fName">Full Name:</label>
			<input type="text" name="fName" id="fName">
			<span style="color:red"><?php echo $fNameErr; ?></span>

			<br><br>

			<label for="lname">Last Name:</label>
		<input type="text" id="lname" name="lname" value="<?php echo $lName; ?>">
		<span style="color: red;"><?php echo $lNameErr; ?></span>

		<br>
		<br>


		
		<label>Gender</label>
		<input type="radio" name="gender" id="male" value="<?php echo $gender; ?>">
		<label for="male">Male</label>
		<input type="radio" name="gender" id="female" value="<?php echo $gender; ?>">
		<label for="female">Female</label>
		<span style="color: red;"><?php echo $GenderErr; ?></span>

		<br>
		<br>


		<label for="DOB">DoB:</label>
		<input type="date" id="DOB" name="start"
		value="2021-02-15 <?php echo $DOB; ?>"
		min="1971-10-20" max="2030-12-31">
		<span style="color: red;"><?php echo $DOBErr; ?></span>

		<br>
		<br>

		

		<label for="relgion">Religion:</label>
		<select id="religion" name="enterReligion">
			<option value="islam">Islam</option>
			<option value="Hinduism">Hinduism</option>
			<option value="Christianity">Christianity</option>
			<option value="Buddhism">Buddhism</option>
			<option value="other">Other</option>
			<span style="color: red;"><?php echo $ReligionErr; ?></span>
		</select>

		<br>

		

	    </fieldset>

	    <fieldset>

		<legend>Contact Information</legend>

		<label for="present">Present Address:</label>
		<input type="text" name="presentAdd" id="present">
		<br>
		<br>

		<label for="permanent">Permanent Address:</label>
		<input type="text" name="permanentAdd" id="permanent">
		<br>
		<br>

		<label for="phone">Phone:</label>
		<input type="tel">
		<br>
		<br>

		<label for="emailId">Email:</label>
        <input type="email" id="emailId" name="Email"value="<?php echo $email; ?>">
        <span style="color: red;"><?php echo $emailErr; ?></span>
        <br>
        <br>


        <label for="webLink">Personal Website link:</label>
        <input type="url" id="webLink" name="Website">
        
        <br>
    </fieldset>



        <fieldset>
       <legend>Account Information</legend>

			<label for="username">Username:</label>
			<input type="text" name="username" id="username">
			<span style="color:red"><?php echo $userNameErr; ?></span>

			<br><br>

			<label for="password">Password:</label>
			<input type="password" name="password" id="password">
			<span style="color:red"><?php echo $passwordErr; ?></span>

			<br><br>

			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>

	<p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>

	<br>



</body>
</html>