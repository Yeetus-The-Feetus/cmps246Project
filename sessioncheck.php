<?php

if(empty($_SESSION)) { 
	session_start(); 
}

if (isset($_SESSION["id"])) {
    
}else{ 
    header("Location: logIn.php");
}