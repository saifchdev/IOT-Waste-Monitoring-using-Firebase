<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "airline";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username= $_POST["username"];
$pass= $_POST["pass"];
$email= $_POST["useremail"];
$phone= $_POST["phone"];
$gender= $_POST["gender"];
$f_name= $_POST["f_name"];
$l_name= $_POST["l_name"];
$dob= $_POST["dob"];



$sql = "INSERT INTO `passenger` (f_name,l_name,username,gender,email,phone,password,dob)
VALUES ('$f_name','$l_name','$username','$gender','$email','$phone','$pass','$dob')";

if ($conn->query($sql) === TRUE) {
    header('Location:../index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 