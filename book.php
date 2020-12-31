<?php

$server="localhost";
$user="root";
$pwd="";
$db="casp";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$source= $_POST["from"];
$destination= $_POST["to"];
$fromdate= $_POST["fromdate"];
$username= $_SESSION["user"];
$class= $_POST["class"];
$flight= $_POST["flight"];




$sql = "INSERT INTO `bookings` (source,destination,fromdate,username,class,flight)
VALUES ('$source', '$destination', '$fromdate','$username','$class','$flight')";

if ($conn->query($sql) === TRUE) {
    header('Location:confirm.php');
    echo $camera;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 