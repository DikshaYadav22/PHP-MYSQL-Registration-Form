<?php 

require("connection.php");
if(isset($_POST['firstname'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $areacode = $_POST['areacode'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $exist = $_POST['exist'];
}

$sql = "Insert INTO `register`(`firstname`, `lastname`, `company`, `email`, `areacode`, `phone`, `subject`, `exist`) VALUES('$firstname', '$lastname', '$company', '$email', '$areacode', '$phone', '$subject', '$exist')";

if($con->query($sql) == true){
    echo "Successfully inserted";
}else{
    die("Error :" .$sql. "<br>". $con->error);
}