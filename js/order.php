<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userdata";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$camera= $_POST["camera"];
$lens = $_POST["lens"];
$fromdate = $_POST["fromdate"];
$todate = $_POST["todate"];
$username=$_SESSION["user"];



$sql = "INSERT INTO `order_place` (camera,lens,fromdate,todate,user)
VALUES ('$camera', '$lens', '$fromdate','$todate','$username')";

if ($conn->query($sql) === TRUE) {
    header('Location:confirm.php');
    echo $camera;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 