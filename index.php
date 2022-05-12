<?php
include_once 'header.php';
?>
<?php
include("dbconnect.php");

$freeGames = mysqli_query($db, "SELECT * FROM games WHERE price=0");
$budgetGames = mysqli_query($db, "SELECT * FROM games WHERE price > 0 AND price < 15");
$topGames = mysqli_query($db, "SELECT * FROM games WHERE rating > 4.2");
?>

    <h1>Top games</h1>

    <div class="gameList">
    <?php
    while ($row = mysqli_fetch_assoc($topGames)) {
        
        $gid = $row['id'];
        $gname = $row['name'];
        $gpic = $row['picture'];
        $gdescription = $row['description'];
        $gprice = $row['price'];
        $grating = $row['rating'];
        
        echo "<div class=\"game-wrapper\"> <div class=\"gameDiv\" onclick=\"sendValue('$gname' , '$gpic' , '$gdescription' , '$gprice$' , '$grating')\" > <img src=\"images/$gpic\" class=\"game\" /></div><div class=\"price\">$gprice$</div></div>";
    }
?>
    </div>

    <h1>Under 15$</h1>
    <div class="gameList">
    <?php
    while ($row = mysqli_fetch_assoc($budgetGames)) {
        
        $gid = $row['id'];
        $gname = $row['name'];
        $gpic = $row['picture'];
        $gdescription = $row['description'];
        $gprice = $row['price'];
        $grating = $row['rating'];
        
        echo "<div class=\"game-wrapper\"> <div class=\"gameDiv\" onclick=\"sendValue('$gname' , '$gpic' , '$gdescription' , '$gprice$' , '$grating')\" > <img src=\"images/$gpic\" class=\"game\" /></div><div class=\"price\">$gprice$</div></div>";
    }
?>
    </div>

    <h1>Free Games</h1>
    <div class="gameList">
    <?php
    while ($row = mysqli_fetch_assoc($freeGames)) {
        
        $gid = $row['id'];
        $gname = $row['name'];
        $gpic = $row['picture'];
        $gdescription = $row['description'];
        $gprice = $row['price'];
        $grating = $row['rating'];
        
        echo "<div class=\"game-wrapper\"> <div class=\"gameDiv\" onclick=\"sendValue('$gname' , '$gpic' , '$gdescription' , '$gprice$' , '$grating')\" > <img src=\"images/$gpic\" class=\"game\" /></div><div class=\"price\">$gprice$</div></div>";
    }
?>
    </div>

    <a href="#" class="top">
      <i class="fas fa-chevron-up"></i>
    </a>

    <script src="main.js"></script>
    <script src="topBTN.js"></script>
  </body>
</html>
