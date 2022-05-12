<!DOCTYPE html>
<html>
  <head>
    <title>YesGames Login</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <?php

if(empty($_SESSION)) { 
	session_start(); 
}

    if (isset($_POST["logOut"])) {
      
        unset($_SESSION["id"]);

    }
    ?>
    <div class="bg">
      <header class="header">
        <h1>Welcome to YesGames</h1>
        <p class="login">Please log in to your account to access the store</p>
      </header>
      <div>
        <form action="inc/logIn.inc.php" method="post">
            <center>
          <table>
            <tr>
              <td>
                <label class="label">Username or Email:</label>
              </td>
              <td>
                <div class="input">
                  <input type="text" name="name" class="text" required/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <label class="label">Password:</label>
              </td>
              <td>
                <div class="input">
                  <input type="password" name="pass" class="text" required/>
                </div>
              </td>
            </tr>
            <tr>
                <td>
                  <div class="button">
                      <button type="submit" name="submit" class="loginbutton">Log In</button> 
                    </div>
                </td>
            </tr>
          </table>
        </form>
        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p class=\"error\">Please fill in all the required fields.</p>";
        }elseif ($_GET["error"] == "userdoesntexist") {
          echo "<p class=\"error\">user does not exist.</p>";
        }elseif ($_GET["error"] == "wrongpass") {
          echo "<p class=\"error\">wrong password</p>";
        }
    }
  ?>
      </div>
      
  </center>
      <p class="SignUpMessage">
        Don't have an account?<a class="signup" href="signUp.php"
          >Sign up here!</a
        >
      </p>
    </div>
    
  </body>
</html>
