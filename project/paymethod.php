<?php 
    define("filepath", "payment.json");
    $PaymentType = $UserName = $PhoneNo = $PinNo =  "";
    $isValid = true;
    $PaymentTypeErr = $UserNameErr = $PhoneNoErr = $PinNoErr = "";
   
    if($_SERVER['REQUEST_METHOD'] === "POST") {
       $PaymentType = $_POST['Payment'];
       $UserName = $_POST['username'];
       $PhoneNo = $_POST['phone'];
       $PinNo = $_POST['PinNo'];
        if(empty($PaymentType)) {
            $PaymentTypeErr = "Required!";
            $isValid = false;
        }
        if(empty($UserName)) {
            $UserNameErr = "Required!";
            $isValid = false;
        }
        if(empty($PhoneNo)) {
            $PhoneNoErr = "Required!";
            $isValid = false;
        }
        if(empty($PinNo)) {
            $PinNoErr = "Required!";
            $isValid = false;
        }
        if($isValid) {
            $PaymentType = test_input($PaymentType);
            $UserName = test_input($UserName);
            $PhoneNo = test_input($PhoneNo);
            $PinNo = test_input($PinNo);

            $arr1 = array('Payment' => $PaymentType, "username" => $UserName, "phone" => $PhoneNo, "PinNo" => $PinNo);
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
    <title>Payment Status</title>
</head>
<body>
<center>
     <br>
            
    <font color="black">
    <h1>Payment Successful!!</h1>
    <br>
<br>

            <button onclick="window.location.href='dashboard.php'" style="font-family: 'Comic Sans MS'; font-size: 15px; width: 200px; height: 30px;  color:black;  background:white; border-color:black;">Go Back</button>
<br>
<br>


<?php include 'logout_include.php';?>
    <br>
<br>

</center>
</body>
</html>