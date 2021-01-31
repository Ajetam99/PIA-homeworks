<?php
    include_once 'dbh.php';

    $mID = $_SESSION['mid'];


    $sql = "DELETE FROM movies WHERE id = $mID;";
    mysqli_query($conn, $sql);
    header("Location: ../index.php");
