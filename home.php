<?php
require('connection.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$insert = false;
if(isset($_POST['name'])){
    
    $name = $_POST['name'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
}
$sql = "INSERT INTO `registration` (`name`, `birthday`, `gender`, `email`, `phone`) VALUES ('$name', NULL, '$gender', '$email', '$phone')";
if($connection->query($sql) === true){
    $insert = true;
}else{
    echo "Error: " . $sql ."<br>". $connection->error;
}
$connection->close();
?>
