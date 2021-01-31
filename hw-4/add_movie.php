<?php
    include_once 'includes/dbh.php';

if(isset($_GET['title'])){
    $id = $_GET['id'];
    $plot = $_GET['plot'];
    $genres = $_GET['genres'];
    $title = $_GET['title'];
    $poster = $_GET['poster'];
    $length = $_GET['length'];
    $year = $_GET['year'];
    $director = $_GET['director'];
    $writter = $_GET['writter'];
    $production = $_GET['production'];
    $cast = $_GET['cast'];
    $status = "Edit the movie";
    $button = "Edit";
}
else{
    $plot = '';
    $genres = '';
    $title = '';
    $poster = '';
    $length = '';
    $year = '';
    $director = '';
    $writter = '';
    $production = '';
    $cast = '';
    $status = "Add a movie";
    $button = "Add";
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php echo $status; ?></title>
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
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="box mvie" action="
                <?php
                    if ($button=="Add") {
                        echo 'includes/movieToDB.php';
                    }
                    else{
                        echo 'includes/editMovieInDB.php';
                        $_SESSION['mid'] = $id;
                    }
                ?>
                " method="post">
                    <h1><?php echo $status; ?></h1>
                    <p class="text-muted"> Please enter movie info!</p>
                    <div class="d-flex justify-content-around">
                    <div>
                    <input type="text" name="title" placeholder="Title" value="<?php echo $title; ?>">
                    <input type="text" name="poster" placeholder="Poster link" value="<?php echo $poster; ?>">
                    <input type="text" name="length" placeholder="Length" value="<?php echo $length; ?>">
                    <input type="text" name="year" placeholder="Year" value="<?php echo $year; ?>">
                    <input type="text" name="genres" placeholder="Genres (separated by a comma)" value="<?php echo $genres; ?>">
                    <input type="text" name="director" placeholder="Director" value="<?php echo $director; ?>">
                    </div>
                    <div>
                    <input type="text" name="writter" placeholder="Writter" value="<?php echo $writter; ?>">
                    <input type="text" name="production" placeholder="Production Company" value="<?php echo $production; ?>">
                    <input type="text" name="cast" placeholder="Cast" value="<?php echo $cast; ?>">
                    <textarea id="txtt" rows="4" cols="60" name="plot" placeholder="Add the plot"><?php echo $plot; ?></textarea>
                    </div>
                    </div>
                    <input type="submit" name="submit" value="<?php echo $button; ?>">

                </form>
            </div>
        </div>
    </div>

    <?php

    ?>


    <script type="text/javascript" src="script.js"></script>
</body>
</html>
