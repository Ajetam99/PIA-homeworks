<?php
    include_once 'includes/dbh.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Log in</title>
    <link rel="icon" href="images/site_icon.png">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div>
        <label class="switch">
            <input type="checkbox">
            <span id="mode" class="slider round" onclick="darkMode()"></span>
        </label>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="box" action="index.php" method="post">
                    <h1>Login</h1>
                    <p class="text-muted"> Please enter your username and password!</p>
                    <input type="text" name="username" placeholder="Username">
                    <input type="password" name="password" placeholder="Password">
                    <a class="forgot text-muted" href="sign_in.php">Create new account</a>
                    <input type="submit" value="Login">

                </form>
            </div>
        </div>
    </div>
    <!-- linear-gradient(to right, #000000, #ffffff); -->

    <script type="text/javascript" src="script.js"></script>
</body>
</html>
