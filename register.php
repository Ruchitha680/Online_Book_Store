<?php
$handler=mysqli_connect("localhost","root","","wtproject");
if($handler){
    echo "success";
}else{
    echo "fail";
}
$name=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$insertQuery = "INSERT INTO  register VALUES ('$name', '$email', '$password','$cpassword');";

    if (mysqli_query($handler, $insertQuery)) {
        echo "Record inserted successfully.";
        header('location:home.php');
    } else {
        echo "Error: ";
    }
?>


