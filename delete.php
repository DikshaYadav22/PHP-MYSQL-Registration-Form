<?php
    require('connection.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM contact where id = '$id'";
    $result = mysqli_query($conn, $sql);