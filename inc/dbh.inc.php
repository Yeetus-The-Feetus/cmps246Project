<?php

$servername = "localhost";
$username = "root";
$password = "";
$dBName = "db";

$conn = mysqli_connect($servername, $username, $password, $dBName);

if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
}