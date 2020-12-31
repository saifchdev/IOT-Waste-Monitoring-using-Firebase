<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$server="localhost";
$user="Zishan";
$pwd="zishan";
$db="Passmgt";

$conn= new mysqli($server,$user,$pwd,$db);

if($conn->connect_error){
die ("Cant connect to database".$conn->connect_error);
}
?>
