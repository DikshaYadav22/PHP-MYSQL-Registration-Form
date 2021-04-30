<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "register";

$con = new mysqli($servername, $username, $password, $dbname);
if($con->connect_error){
    die("Connection failed" .$con->connect_error);
}else{
    echo "Successfully connected";
}