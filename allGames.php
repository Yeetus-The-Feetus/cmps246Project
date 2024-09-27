<?php
include("dbconnect.php");

  if (isset($_POST["search"]) && $_POST["search"] != "") {
    $input = strtolower($_POST["search"]);
    $searching = true;
  }else {
    $searching = false;
  }

  if (isset($_POST["cat"])) {
    if ($_POST["cat"] == "all") {
      $result = mysqli_query($db, "SELECT * FROM games");
    }elseif ($_POST["cat"] == "board"){
      $result = mysqli_query($db, "SELECT * FROM games WHERE catid = 4");
    }elseif ($_POST["cat"] == "action"){
      $result = mysqli_query($db, "SELECT * FROM games WHERE catid = 3");
    }elseif ($_POST["cat"] == "adventure"){
      $result = mysqli_query($db, "SELECT * FROM games WHERE catid = 2");
    }elseif ($_POST["cat"] == "free"){
      $result = mysqli_query($db, "SELECT * FROM games WHERE price = 0");
    }elseif ($_POST["cat"] == "top"){
      $result = mysqli_query($db, "SELECT * FROM games WHERE rating > 4.2");
    }else {
      $result = mysqli_query($db, "SELECT * FROM games");
    }
    } else {
      
      $result = mysqli_query($db, "SELECT * FROM games");
  } 
  


?>

<?php
include_once 'header.php';
?>
<form action="allGames.php" method="post">
<select name="cat" id="cat">
  <option value="all" >All games</option>
  <option value="board">Board games</option> games</option>
  <option value="action">Action games</option>
  <option value="adventure">Adventure games</option>
  <option value="free">Free games</option>
  <option value="top">Top games</option>
</select>
<button type="submit" name="submit">Filter</button>
</form>

    <div class="gameList">

  <?php
    while ($row = mysqli_fetch_assoc($result)) {
        
        $gid = $row['id'];
        $gname = $row['name'];
        $gpic = $row['picture'];
        $gdescription = $row['description'];
        $gprice = $row['price'];
        $grating = $row['rating'];
        $gdescriptionlower = strtolower($gdescription);
        $gnamelower = strtolower($gname);
        if ($searching) {
          if ((strpos($gnamelower, $input) !== false) || (strpos($gdescriptionlower, $input) !== false) || (strpos($gprice, $input) !== false) || (strpos($grating, $input) !== false)) {
          echo "<div class=\"game-wrapper\"> <div class=\"gameDiv\" onclick=\"sendValue('$gname' , '$gpic' , '$gdescription' , '$gprice$' , '$grating')\" > <img src=\"images/$gpic\" class=\"game\" /></div><div class=\"price\">$gprice$</div></div>";
          }
        }else {
          echo "<div class=\"game-wrapper\"> <div class=\"gameDiv\" onclick=\"sendValue('$gname' , '$gpic' , '$gdescription' , '$gprice$' , '$grating')\" > <img src=\"images/$gpic\" class=\"game\" /></div><div class=\"price\">$gprice$</div></div>";
        }
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
