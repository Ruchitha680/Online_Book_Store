<?php
include "navbar.php";
?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
body {
  width: 100%;
   height: 100%;
  background-image: url('book2.jpeg');
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}
</style> 
</head>
<body>
<div class="container-fluid">
<h1 align="center">ORDERS</h1>
<br><br>
<form action="orders1.php" method="get">
  <div class="row">
  <div class="col">
  <label class="form-label" for="name">Name:</label>
  <input class="form-control" id="name" name="name" type="text" placeholder="Enter your name"> 
  </div>
  <div class="col">
  <label class="form-label" for="number">Phone Number:</label>
  <input class="form-control" id="number" name="number" type="tel" placeholder="Enter your mobile number">
  </div>
  </div>
  <div class="row">
  <div class="col">
  <label class="form-label" for="address">Address:</label>
  <input class="form-control" id="address" name="address" type="text" placeholder="Street name,Village name,Mandal,District,State">
  </div>
  <div class="col">
  <label class="form-label" for="pin">Pincode:</label>
  <input class="form-control" id="pin" name="pin" type="text" placeholder="Enter your pincode">
  </div>
  </div>
  <div class="row">
  <div class="col">
  <label class="form-label" for="book">Book Name:</label>
  <input class="form-control" id="book" name="book" type="text" placeholder="Enter the Book Name">
  </div>
  <div class="col">
  <label class="form-label" for="copies">No.of.Copies:</label>
  <input class="form-control" id="copies" name="copies"  type="text" placeholder="Enter Number of copies you wanted">
  </div>
  </div>
  <br><br>
  <div align="center">
  <input type="submit" name="submit" value="Place the Order">
  </div>
</form>
</div>
</body>
