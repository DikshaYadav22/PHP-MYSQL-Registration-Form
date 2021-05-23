<?php
$hostname = localhost;
$username = root;
$password = root;
$dbname = contact;

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    echo "Error is " . mysqli_error($conn);
}