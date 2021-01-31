<?php
    include_once 'dbh.php';

    $plot = $_POST['plot'];
    $plot = str_replace("'","\'",$plot);
    $plot = str_replace('"','\"',$plot);
    $genres = $_POST['genres'];
    $title = $_POST['title'];
    $title = str_replace("'","\'",$title);
    $title = str_replace('"','\"',$title);
    $poster = $_POST['poster'];
    $length = $_POST['length'];
    $year = $_POST['year'];
    $director = $_POST['director'];
    $writter = $_POST['writter'];
    $production = $_POST['production'];
    $cast = $_POST['cast'];
    $mID = $_SESSION['mid'];


    $sql = "UPDATE movies 
    SET 
        title = '$title',
        poster = '$poster',
        length = '$length',
        yr = '$year',
        director = '$director',
        writter = '$writter',
        production = '$production',
        cast = '$cast',
        plot = '$plot',
        genres = '$genres'
    WHERE 
        id = $mID;";
    mysqli_query($conn, $sql);
    header("Location: ../movie.php?currentMovie=$mID");