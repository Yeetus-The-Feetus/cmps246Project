<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YesGames</title>
    <link rel="stylesheet" href="darkTheme.css" />
    <script src="https://kit.fontawesome.com/a54d2cbf95.js"></script>
  </head>
  <?php
include 'sessioncheck.php';
  ?>
  <body>
    <div class="header">
      <h1 class="title">YesGames</h1>
      <div class="searchWrapper">
        <form action="allGames.php" method="post">
        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
        <input type="text" name="search" id="search" placeholder="Search..." />
        </form>
      </div>
    </div>
    <div class="nav-header">
      <ul class="nav">
        <li class="nav-wrapper"><a href="index.php">Home</a></li>
        <li class="nav-wrapper"><a href="allGames.php">All Games</a></li>
        <li class="nav-wrapper"><a href="aboutUs.php">About Us</a></li>
        <li class="nav-wrapper"><a href="contactUs.php">Contact Us</a></li>
        <li class="nav-wrapper" id="logOut">
          <form action="logIn.php" method="post">
          <button type="submit" name="logOut" class="logout">
            <?php
              if (isset($_SESSION["id"])) {
                echo "Log Out";
              }else {
                echo "Log In";
              }
            ?>
          </button>
          </form>
        </li>
        
      </ul>
    </div>