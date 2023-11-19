<?php

//Params to connect to ucbr_db
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "ucbr_db";

//Connection to database
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die("Database connection failed!");
}
