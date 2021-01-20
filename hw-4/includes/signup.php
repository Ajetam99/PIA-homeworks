<?php
    include_once 'dbh.php';

    $email = $_POST['mail'];
    $first = $_POST['first'];
    $last = $_POST['last'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $sql = "INSERT INTO users (email,fName,lName,username,pswd,admin) VALUES ('$email','$first','$last','$uid','$pwd',false);";
    mysqli_query($conn, $sql);

    header("Location: ../movie.php");