<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div class="bg">
      <header class="header">
        <h1>Welcome to YesGames</h1>
        <p class="login">Please fill the information to sign up:</p>
      </header>

      <center>
        <form action="inc/signUp.inc.php" method="post">
          <table>
            <tr>
              <td>
                <label class="label">Please enter a username:</label>
              </td>
              <td>
                <div class="input">
                  <input type="text" name="name" class="text" required/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <label class="label">Please enter a valid email address:</label>
              </td>
              <td>
                <div class="input">
                  <input type="email" name="email" class="text" required/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <label class="label">Please enter a password:</label>
              </td>
              <td>
                <div class="input">
                  <input type="password" name="pass" class="text" required/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <label class="label">Confirm Password:</label>
              </td>
              <td>
                <div class="input">
                  <input type="password" name="cpass" class="text" required/>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <button type="submit" class="loginbutton" name="submit">Create Account</button>
              </td>
              <td>
                <a href="logIn.php" class="loginbutton">Already have an account?</a>
              </td>
            </tr>
          </table>
        </form>

        <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
          echo "<p class=\"error\">Please fill in all the required fields.</p>";
        }elseif ($_GET["error"] == "invaliduid") {
          echo "<p> class=\"error\"choose a valid username</p>";
        }elseif ($_GET["error"] == "invalidemail") {
          echo "<p class=\"error\">choose a valid email</p>";
        }elseif ($_GET["error"] == "passerror") {
          echo "<p class=\"error\">passwords do not match</p>";
        }elseif ($_GET["error"] == "stmtfailed") {
          echo "<p class=\"error\">something went wrong</p>";
        }elseif ($_GET["error"] == "emailtaken") {
          echo "<p class=\"error\">email is already taken</p>";
        }elseif ($_GET["error"] == "nametaken") {
          echo "<p class=\"error\">username is already taken</p>";
        }elseif ($_GET["error"] == "none") {
          echo "<p class=\"success\">you signed up successfully</p>";
        }
    }
  ?>
        <div></div>
      </center>
    </div>

  

  </body>
</html>
