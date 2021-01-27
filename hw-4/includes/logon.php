<?php
    require 'dbh.php';

    echo $_SESSION['username'];
    $emailUsername = $_POST['username'];
    $emailUsername = trim($emailUsername);
    $pwd = $_POST['password'];
    $pwd = trim($pwd);

    $sql = "SELECT * FROM users WHERE (username='$emailUsername' OR email='$emailUsername') AND pswd='$pwd'";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);

    if($data['pswd']==$pwd){
        session_start();
        $_SESSION['username'] = $data['username'];
        $_SESSION['id'] = $data['id'];
        $_SESSION['admin'] = $data['admin'];
        header("Location: ../index.php");
    }
    else{
        header("Location: ../log_in.php?error=wrong");

    }