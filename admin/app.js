 function approve() 
 {
<?php
$curruser=$_SESSION['rollno'];

$sql2= mysqli_query($conn,'UPDATE request SET department='1' WHERE rollno='$curruser'');

?>
}

function disapprove() {
<?php

$sql3= mysqli_query($conn,'UPDATE request SET department='0' WHERE rollno='$curruser'');

?>