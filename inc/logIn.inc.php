<?php

	include("../dbconnect.php");
	
	if (isset($_POST["name"]) && isset($_POST["pass"])) {
		include("../dbconnect.php");
		$user = mysqli_real_escape_string($db,$_POST["name"]);
		$pass = md5(mysqli_real_escape_string($db,$_POST["pass"]));
		
		$query = "SELECT password FROM users WHERE username='$user' OR email='$user'";
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
		$row = mysqli_fetch_assoc($result);
		
		if ($pass == $row["password"]) { 
            session_start();
			$_SESSION["id"]= true;
            header("Location: ../index.php");

		} else { 
			header("Location: ../login.php?error=wrongpass");
            exit(); 
		}
	}