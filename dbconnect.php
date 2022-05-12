<?php

$servername = "localhost";
$username = "root";
$password = "";

$db = new mysqli($servername, $username, $password,"db");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
 