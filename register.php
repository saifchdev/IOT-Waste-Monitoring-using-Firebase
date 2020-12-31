<?php

$servername="localhost";
$username="root";
$password="";
$dbname="casp";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
$rollno= $_POST["rollno"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$f_name= $_POST["f_name"];
$l_name= $_POST["l_name"];
$gender= $_POST["gender"];
$dob= $_POST["dob"];
$password= md5($_POST["password"]);





$sql = "INSERT INTO `users` (rollno,email,phone,f_name,l_name,gender,dob,password)
VALUES ('$rollno', '$email', '$phone','$f_name','$l_name','$gender','$dob','$password')";

if ($conn->query($sql) === TRUE) {
    header('Location:index.php');
 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 