
<?php
include "navbar.php";
?>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
<h1 align="center" >Contact Us</h1>
<br><br>
<div class="row">
  <div class="col"></div>
  <div class="col">
  <form action="contact1.php" method="POST">
  <label for="name" class="form-label">Name:</label>
  <input id="name" class="form-control" type="text" name="name">
  <label for="email" class="form-label">Email:</label>
  <input id="email" class="form-control" type="email" name="email">
  <label for="number" class="form-label">Phone Number</label>
  <input id="number" class="form-control" type="tel" name="number">
  <label for="message" class="form-label">Message</label>
  <textarea name="message" class="form-control" id="message" name="message" cols="30" rows="10"></textarea> 
  <div align="center">
  <input type="submit" value="send message" name="submit" class="btn btn-dark">
  </div>
  </form>
  </div>
  <div class="col"></div>
  </div>
</div>
</body>
</html>
