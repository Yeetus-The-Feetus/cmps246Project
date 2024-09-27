<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($name, $email, $pass, $cpass) !== false) {
        header("Location: ../signUp.php?error=emptyinput");
        exit();
    }
    if (invalidUid($name) !== false) {
        header("Location: ../signUp.php?error=invaliduid");
        exit();
    }
    if (invalidEmail($email) !== false) {
        header("Location: ../signUp.php?error=invalidemail");
        exit();
    }
    if (passError($pass, $cpass) !== false) {
        header("Location: ../signUp.php?error=passerror");
        exit();
    }
    if (emailTaken($conn , $email) !== false) {
        header("Location: ../signUp.php?error=emailtaken");
        exit();
    }
    if (nameTaken($conn , $name) !== false) {
        header("Location: ../signUp.php?error=nametaken");
        exit();
    }

    createUser($conn, $name, $email, $pass);

}
else {
    header("Location: ../signUp.php");
    exit();

}