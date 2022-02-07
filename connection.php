<?php
$conn = mysqli_connect('localhost' , 'crud', 'emabovari', 'firstdb');

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>