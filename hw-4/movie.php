<?php
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

    $sql = "SELECT * FROM reviews WHERE movieID=$movie ORDER BY id ASC";
    $result = mysqli_query($conn,$sql);
    $reviews = [];
    $myReview = "";
    while($data = mysqli_fetch_assoc($result)){
        $reviews[] = $data['review'];
        if($data['userID']==$_SESSION['id']){
            $myReview = $data['review'];
        }
    }
    if(count($reviews)==0){
        $average="";
    }
    else{
    $average = array_sum($reviews)/count($reviews);
    $average = round($average, 1);
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
            <form class="form-inline" action="movie_search.php" method="get">
                <input class="form-control mr-sm-2" name='search' type="text" placeholder="Search movies by name">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
            <div style="width: 30px;"></div>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    All genres
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="movie_genres.php?search=Action">Action</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Adventure">Adventure</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Animation">Animation</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Biography">Biography</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Comedy">Comedy</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Crime">Crime</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Drama">Drama</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Family">Family</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Fantasy">Fantasy</a>
                    <a class="dropdown-item" href="movie_genres.php?search=History">History</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Horror">Horror</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Musical">Musical</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Mystery">Mystery</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Romance">Romance</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Sci-Fi">Sci-Fi</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Thriller">Thriller</a>
                    <a class="dropdown-item" href="movie_genres.php?search=War">War</a>
                    <a class="dropdown-item" href="movie_genres.php?search=Western">Western</a>
                </div>
            </div>
        </div>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="includes/logout.php">Log out</a>
                <a class="dropdown-item" href="add_movie.php" <?php if(!$_SESSION['admin']){echo 'style="display:none;"';} ?>>Add a movie</a>
                <a class="dropdown-item" href="all_movies.php" <?php if(!$_SESSION['admin']){echo 'style="display:none;"';} ?>>All movies</a>
                <a class="dropdown-item" href="<?php echo "add_movie.php?plot=$plot&genres=$genres&title=$title&poster=$poster&length=$len&year=$year&director=$director&writter=$writter&production=$production&cast=$cast&id=$movie"; ?>" <?php if(!$_SESSION['admin']){echo 'style="display:none;"';} ?>>Edit this movie</a>
                <a class="dropdown-item" href="includes/delete_movie.php" action="<?php $_SESSION['mid'] = $movie; ?>" style="color:red;">Delete this movie</a>
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
                            <div class="col rating"> <span id="ratingAverage"><?php echo $average; ?></span> </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="col star" id="myStar" onclick="openForm()"> <img id="ovstar" src="images/star_yellow.png"> </div>
                            <div class="form-popup" id="myForm">
                                <form method="post" action="includes/review_movie.php<?php $_SESSION['mid'] = $movie; ?>" class="form-container">
                                    <h1><?php echo $title; ?></h1>

                                    <input type="number" name="review" min="1" max="10" required>

                                    <button type="submit" class="btn">Confirm</button>
                                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                                </form>
                            </div>
                            <div class="col rating"> <span id="myRating"><?php echo $myReview; ?></span> </div>
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

    <script type="text/javascript" src="script.js"></script>
</body>
</html>
