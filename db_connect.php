<?php
// for displaying errors
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$server="localhost";
$user="root";
$pwd="";
$db="casp";

$conn = new mysqli($server,$user,$pwd,$db);

if($conn->connect_error){
    die("can't connect to database".$conn->connect_error);
}
?>