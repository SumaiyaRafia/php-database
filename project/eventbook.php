<?php 
    define("filepath", "event.json");
     $EventType =  "";
    $isValid = true;
    $EventTypeErr = "";
   
    if($_SERVER['REQUEST_METHOD'] === "POST") {
       $EventType = $_POST['event'];
        if(empty($EventType)) {
            $EventTypeErr = "Required!";
            $isValid = false;
        }
        
        if($isValid) {
            $EventType = test_input($EventType);

            $arr1 = array("event" => $EventType);
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
    <title>Feedback</title>
</head>
<body>
<center>
     <br>
            
    <font color="black">
    <h1>Thank You For Booking!</h1>
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