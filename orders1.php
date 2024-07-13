<?php
session_start();

$handler=mysqli_connect("localhost","root","Ruchitha@123","wtproject",3307);
if($handler){
    echo "success";
}else{
    echo "fail";
}

$_SESSION['name'];

if(isset($_GET['submit'])){
$name=$_GET['name'];
$number=$_GET['number'];
$address=$_GET['address'];
$pin=$_GET['pin'];
$book=$_GET['book'];
$copies=$_GET['copies'];
$_SESSION['name']=$name;
$insertQuery = "INSERT INTO orders  VALUES ('$name', '$number', '$address', '$pin', '$book', '$copies')";

    if (mysqli_query($handler, $insertQuery)) {
       
        header('location:success.php');
    } else {
        echo "Error: ";
    }
}
?>

