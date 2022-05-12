<?php

function emptyInputSignup($name, $email, $pass, $cpass) {
    $result;
    if (empty($name) || empty($email) || empty($pass) || empty($cpass)) {
        $result = true;
}else{ 
    $result = false;
}
return $result;
}

function invalidUid($name){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $name)) {
        $result = true;
}else{ 
    $result = false;
}
return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
}else{ 
    $result = false;
}
return $result;
}

function passError($pass, $cpass){
    $result;
    if ($pass !== $cpass) {
        $result = true;
}else{ 
    $result = false;
}
return $result;
}

function emailTaken($conn ,$email){
    $useremail = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($useremail)) {
        return true;
    }else {
        return false;
    }
}
function nameTaken($conn ,$name){
    $username = mysqli_query($conn, "SELECT * FROM users WHERE username = '$name'");
    if (mysqli_num_rows($username)) {
        return true;
    }else {
        return false;
    }
}

function createUser($conn, $name, $email, $pass){
    $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: ../signUp.php?error=stmtfailed");
    exit();

    }

    $hash = md5($pass);

    mysqli_stmt_bind_param($stmt, "sss",$name, $email, $hash);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../signUp.php?error=none");
    exit();
}

function emptyInputLogIn($name, $pass) {
    $result;
    if (empty($name) || empty($pass)) {
        $result = true;
}else{ 
    $result = false;
}
return $result;
}
