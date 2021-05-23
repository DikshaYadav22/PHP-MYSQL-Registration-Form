<?php
require("connection.php");
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$sql = "INSERT INTO contact (firstname, lastname, email, phone, message) VALUES('$firstname', '$lastname', '$email', '$phone', '$message')";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		echo "Error". $mysqli_error($result);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Contact Data</title>
</head>
<body>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>SNo.</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>

    <tbody>
    <?php
        $data = "SELECT * FROM contact";
        $result = mysqli_query($conn, $data);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['firstname']."</td>
                <td>".$row['lastname']."</td>
                <td>".$row['email']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['message']."</td>
                <td>
                    <a href='edit.php?id=".$row['id']."' class='btn btn-sm btn-info'>Edit</a>
                </td>
                <td>
                    <a href='delete.php?id=".$row['id']."' class='btn btn-sm btn-danger'>Delete</a>
                </td>
            </tr>";
        }

?>

    </tbody>
</table> 


</body>
</html>