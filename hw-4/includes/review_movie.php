<?php
    include_once 'dbh.php';

    $uID = $_SESSION['id'];
    $mID = $_SESSION['mid'];
    $review = $_POST['review'];

    $sql = "SELECT * FROM reviews WHERE movieID=$mID AND userID=$uID";
    $result = mysqli_query($conn,$sql);
    $rev = mysqli_fetch_assoc($result)['review'];

if($rev){
    echo $mID;

    $sql = "UPDATE reviews SET review = '$review' WHERE userID = $uID AND movieID = $mID;";
    $res = mysqli_query($conn, $sql);
}
else{
    $sql = "INSERT INTO reviews (movieID,userID,review) VALUES ($mID,$uID,$review);";
    mysqli_query($conn, $sql);
}
    header("Location: ../movie.php?currentMovie=$mID");