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


    $sql = "INSERT INTO movies (title,poster,length,yr,director,writter,production,cast,plot,genres) VALUES ('$title','$poster','$length','$year','$director','$writter','$production','$cast','$plot','$genres');";
    mysqli_query($conn, $sql);
    header("Location: ../index.php");