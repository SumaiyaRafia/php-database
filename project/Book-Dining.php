<?php
session_start();
?>
	

	<?php 
	define("filepath", "booking.json");
	$Bdate = $Bperson = "";
	$isValid = true;
	$BdateErr = $BpersonErr = "";
	$successfulMessage = $errorMessage = "";
	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$Bdate = $_POST['date'];
		$Bperson = $_POST['person'];
		if(empty($Bdate)) {
			$BdateErr = "Required!";
			$isValid = false;
		}
		if(empty($Bperson)) {
			$BpersonErr = "Required!";
			$isValid = false;
		}
		if($isValid) {
			$Bdate = test_input($Bdate);
			$Bperson = test_input($Bperson);

			$arr1 = array('date' => $Bdate, "person" => $Bperson);
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
    <title>Book Dining</title>
</head>
<body>
<center>
     <br>
            
    <font color="black">
    <h1>Thank You!!</h1>
    <br>
<br>

            <button onclick="window.location.href='book.php'" style="font-family: 'Comic Sans MS'; font-size: 15px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Go Back</button>
<br>
<br>


<?php include 'logout_include.php';?>
    <br>
<br>

</center>
</body>
</html>
