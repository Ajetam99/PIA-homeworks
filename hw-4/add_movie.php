<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Add movie</title>
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
                <form class="box mvie" action="includes/movieToDB.php" method="post">
                    <h1>Add a movie</h1>
                    <p class="text-muted"> Please enter movie info!</p>
                    <div class="d-flex justify-content-around">
                    <div class="">
                    <input type="text" name="title" placeholder="Title">
                    <input type="text" name="poster" placeholder="Poster link">
                    <input type="text" name="length" placeholder="Length">
                    <input type="text" name="year" placeholder="Year">
                    <input type="text" name="genres" placeholder="Genres (separated by space)">
                    <input type="text" name="director" placeholder="Director">
                    </div class="">
                    <div>
                    <input type="text" name="writter" placeholder="Writter">
                    <input type="text" name="production" placeholder="Production Company">
                    <input type="text" name="cast" placeholder="Cast">
                    <textarea id="txtt" rows="4" cols="60" name="plot" placeholder="Add the plot"></textarea>
                    </div>
                    </div>
                    <input type="submit" name="submit" value="Add">

                </form>
            </div>
        </div>
    </div>

    <?php

    ?>


    <script type="text/javascript" src="script.js"></script>
</body>
</html>
