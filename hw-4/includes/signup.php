<?php
    include_once 'dbh.php';
    include_once 'functions.php';

    $email = $_POST['mail'];
    $email = trim($email);
    $first = $_POST['first'];
    $first = trim($first);
    $last = $_POST['last'];
    $last = trim($last);
    $uid = $_POST['uid'];
    $uid = trim($uid);
    $pwd = $_POST['pwd'];
    $pwd = trim($pwd);

    function uidExists($uid, $email,$conn){
        $sql = "SELECT * FROM users WHERE username = '.$uid.' OR email = '.$email.';";
        $result = mysqli_query($conn,$sql);
        $resultCheck = mysqli_num_rows($result);
        if (mysqli_fetch_assoc($result)['username']==$uid) {
            return true;
        }
        else{
            return false;
        }
    }
    

    if(emptyInputSignup($email,$first,$last,$uid,$pwd)!==false){
        header("location: ../sign_in.php?error=emptyinput");
        exit();
    }
    if(strlen($pwd)<5){
        header("location: ../sign_in.php?error=invalidpwd");
        exit();
    }
    if(uidExists($uid,$email,$conn)!==false){
        header("location: ../sign_in.php?error=uidtaken");
        exit();
    }
    else{
        session_start();
        $sql = "INSERT INTO users (email,fName,lName,username,pswd,admin) VALUES ('$email','$first','$last','$uid','$pwd',false);";
        mysqli_query($conn, $sql);
        $_SESSION['username'] = $uid;
        $sql = "SELECT * FROM users WHERE username='$uid'";
        $result = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $data['id'];
        $_SESSION['admin'] = false;
        header("Location: ../index.php");
    }
    
    