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

$usr= $_POST["username"];
$id = $_POST["id"];
$email = $_POST["useremail"];
$pwd = $_POST["pwd"];



$sql = "INSERT INTO `data` (ID, username,useremail,pwd)
VALUES ('$id', '$usr', '$email','$pwd')";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 