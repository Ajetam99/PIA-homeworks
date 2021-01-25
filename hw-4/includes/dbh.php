<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "hw4db";

$currentMovie = "";
$currentUser = "";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

session_start();