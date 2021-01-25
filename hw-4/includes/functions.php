<?php
    include_once 'dbh.php';

function emptyInputSignup($email,$first,$last,$uid,$pwd){
        if(strlen($email)==0){
            return true;
        }
        if(strlen($first)==0){
            return true;
        }
        if(strlen($last)==0){
            return true;
        }
        if(strlen($uid)==0){
            return true;
        }
        if(strlen($pwd)==0){
            return true;
        }
        return false;
    }

    