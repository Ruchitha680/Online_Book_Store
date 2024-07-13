

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./done.css">
    <script defer src="./registration.js"></script>
</head>
<body>
   

    <div class="container">
<br>
        <form id="form" action="log.php"method="post">
            <h1>Login</h1>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password"name="password" type="password">
                <div class="error"></div>
            </div>
            <input type="submit" name="submit" value="login now" class="btn">
            <br>
            <br>
            
            <div>
            Don't have an account? Register now<a href="registration.php">Log in</a>
            </div>
        </form>
    </div>
</body>

</html>

