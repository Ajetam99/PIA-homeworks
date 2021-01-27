<?php
    require 'dbh.php';
    session_destroy();
    header("Location: ../log_in.php");