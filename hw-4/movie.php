<?php
    include_once 'includes/dbh.php';
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
                    Dropdown button
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
                $username
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Log out?</a>
            </div>
        </div>
    </div>
    <div id="backGR" class="container">
        <div class="row-vertical">
            <div class="titleBar">
                <p id="title">We're the Millers</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img id="poster" src="https://4.bp.blogspot.com/-W1ibjjgfMxw/UlbLaRBdjpI/AAAAAAAAAQE/3HgTMBsPsuw/s1600/millers.jpg">
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
                    <p class="movieInfo">Length: <span class="movieInfoText">110 min</span></p>
                    <p class="movieInfo">Year: <span class="movieInfoText">2013</span> </p>
                    <p class="movieInfo">Genres: <span class="movieInfoText">Comedy, Crime</span> </p>
                    <p class="movieInfo">Director: <span class="movieInfoText">Rawson Marshall Thurber</span> </p>
                    <p class="movieInfo">Writter: <span class="movieInfoText">Bob Fisher</span> </p>
                    <p class="movieInfo">Production Company: <span class="movieInfoText">New Line Cinema</span> </p>
                    <p class="movieInfo">Cast: <span class="movieInfoText">Jennifer Aniston, Jason Sudeikis, Emma Roberts, Will Poulter, Ed Helms</span> </p>
                    <p class="movieInfo">Plot: <span class="movieInfoText">A veteran pot dealer creates a fake family as part of his plan to move a huge shipment of weed into the U.S. from Mexico.</span> </p>
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
