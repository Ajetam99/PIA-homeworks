<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Sign in</title>
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
                <form class="box">
                    <h1>Sign in</h1>
                    <p class="text-muted"> Please enter your email, username and password!</p> 
                    <input type="email" id="" placeholder="E-mail"> 
                    <input type="text" id="" placeholder="Username"> 
                    <input type="password" id="" placeholder="Password">
                    <input type="submit" id="" value="Sign in" href="#">
                    
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>


</html>