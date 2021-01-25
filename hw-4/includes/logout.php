<?php
    require 'dbh.php';
    session_destroy();
    header("Location: ../sign_in.php");