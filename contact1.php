<?php

//$handler=mysqli_connect("localhost","root","Ruchitha@123","wtproject");
// if($handler){
//     echo "success";
// }else{
//     echo "fail";
// }

// $name=$_POST['name'];
// $email=$_POST['email'];
// $number=$_POST['number'];
// $message=$_POST['message'];
// echo $name;

// $insertQuery = "INSERT INTO contact  VALUES ('$name', '$email', '$number', '$message');";

//     if (mysqli_query($handler, $insertQuery)) {
//         header('location:message.php');
        
//     } else {
//         echo "Error: ";
//     }
$server = "localhost";
$username = "root";
$password = "Ruchitha@123";
$dbname = "wtproject";
// Create connection
$conn = mysqli_connect($server, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$number=$_POST['number'];
$sql = "INSERT INTO `contact` VALUES ('$name', '$email','$number', '$message')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?> 

