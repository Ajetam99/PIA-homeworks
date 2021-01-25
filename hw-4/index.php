<?php
if(session_status()!==2){
    header("Location: log_in.php");
}

else{
    include_once 'includes/dbh.php';

    $myUsername = $currentUser;
    $sql = "SELECT * FROM movies ORDER BY id DESC";
    $result = mysqli_query($conn,$sql);
    $mID = [];
    $mName = [];
    $mPoster = [];
    while($data = mysqli_fetch_assoc($result)){
        $mID[] = $data['id'];
        $mName[] = $data['title'];
        $mPoster[] = $data['poster'];
    }
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>We're the Millers</title>
    <link rel="icon" href="images/site_icon.png">

    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="d-flex justify-content-around">
        <div>
            <label class="switch">
                <input type="checkbox">
                <span id="mode" class="slider round" onclick="darkMode()"></span>
            </label>
        </div>

        <div class="d-flex justify-content-center align-self-center">
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            <div style="width: 30px;"></div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All genres
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="includes/logout.php">Log out?</a>
                <a class="dropdown-item" href="includes/logout.php" <?php if(!$_SESSION['admin']){echo 'style="display:none;"';} ?>>add a movie</a>
            </div>
        </div>
    </div>
    <div id="backGR" class="container">
        <div class="row-vertical">
            <div style="height: 20px;"></div>
            <div class="d-flex justify-content-around">
                <div class="order-md-4 posters">
                    <a href="movie.php?currentMovie=<?php echo $mID[0]; ?>">
                    <img class="moviesMain" src="<?php echo $mPoster[0]; ?>"> 
                    </a>
                </div>
                <div class="order-md-4 posters">
                    <a href="movie.php?currentMovie=<?php echo $mID[1]; ?>">
                    <img class="moviesMain" src="<?php echo $mPoster[1]; ?>"> 
                    </a>               
                </div>
                <div class="order-md-4 posters">
                    <a href="movie.php?currentMovie=<?php echo $mID[2]; ?>">
                    <img class="moviesMain" src="<?php echo $mPoster[2]; ?>"> 
                    </a>                
                </div>
            </div>
            <div class="d-flex justify-content-around">
                <div class="order-md-4 posters">
                    <a href="movie.php?currentMovie=<?php echo $mID[3]; ?>">
                    <img class="moviesMain" src="<?php echo $mPoster[3]; ?>"> 
                    </a>
                </div>
                <div class="order-md-4 posters">
                    <a href="movie.php?currentMovie=<?php echo $mID[4]; ?>">
                    <img class="moviesMain" src="<?php echo $mPoster[4]; ?>"> 
                    </a>                </div>
                <div class="order-md-4 posters">
                    <a href="movie.php?currentMovie=<?php echo $mID[5]; ?>">
                    <img class="moviesMain" src="<?php echo $mPoster[5]; ?>"> 
                    </a>                
                </div>
            </div>

        </div>
    </div>

    <?php

     ?>



    <script type="text/javascript" src="script.js"></script>
</body>
</html>
