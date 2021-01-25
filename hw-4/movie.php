<?php
if(session_status()!==2){
    header("Location: log_in.php");
}
else{
    include_once 'includes/dbh.php';

    $movie = 25;
    $movie = $_GET['currentMovie'];

    $sql = "SELECT * FROM movies WHERE id='$movie'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);
    $title = $data['title'];
    $poster = $data['poster'];
    $len = $data['length'];
    $year = $data['yr'];
    $director = $data['director'];
    $writter = $data['writter'];
    $production = $data['production'];
    $cast = $data['cast'];
    $plot = $data['plot'];
    $genres = $data['genres'];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
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
                    <a class="dropdown-item" href="#">Adventure</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                $username
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="includes/logout.php">Log out?</a>
            </div>
        </div>
    </div>
    <div id="backGR" class="container">
        <div class="row-vertical">
            <div class="titleBar">
                <p id="title"><?php echo $title; ?></p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img id="poster" src="<?php echo $poster; ?>">
                    <div id="ratingzz" class="d-flex justify-content-between">
                        <div class="d-flex justify-content-start">
                            <div class="col star" id="overallStar"> <img id="ovstar" src="images/star.png"> </div>
                            <div class="col rating"> <span id="ratingAverage">7.0</span> </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="col star" id="myStar"> <img id="ovstar" src="images/star_yellow.png"> </div>
                            <div class="col rating"> <span id="myRating">9.0</span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8" id="details">
                  <div id="detailsText">
                    <p class="movieInfo">Length: <span class="movieInfoText"><?php echo "$len min"; ?></span></p>
                    <p class="movieInfo">Year: <span class="movieInfoText"><?php echo $year; ?></span> </p>
                    <p class="movieInfo">Genres: <span class="movieInfoText"><?php echo $genres; ?></span> </p>
                    <p class="movieInfo">Director: <span class="movieInfoText"><?php echo $director; ?></span> </p>
                    <p class="movieInfo">Writter: <span class="movieInfoText"><?php echo $writter; ?></span> </p>
                    <p class="movieInfo">Production Company: <span class="movieInfoText"><?php echo $production; ?></span> </p>
                    <p class="movieInfo">Cast: <span class="movieInfoText"><?php echo $cast; ?></span> </p>
                    <p class="movieInfo">Plot: <span class="movieInfoText"><?php echo $plot; ?></span> </p>
                  </div>
                </div>
            </div>

        </div>
    </div>
    <!-- linear-gradient(to right, #000000, #ffffff); -->

    <?php

     ?>



    <script type="text/javascript" src="script.js"></script>
</body>
</html>
