<?php
include_once 'header.php';
?>

    <h1>Top games</h1>

    <div class="gameList">
      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('Among Them' , 'amongThem.png' , 'this game is about having trust issues with all ur friends and saying sus every 5 minutes' , '10$' , '4')"
        >
          <img src="amongThem.png" class="game" />
        </div>
        <div class="price">9.99$</div>
      </div>

      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('BlockGame' , 'blockGame.png' , 'In this game u can ' , '29.99$' , '5')"
        >
          <img src="blockGame.png" class="game" />
        </div>
        <div class="price">29.99$</div>
      </div>

      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('Red Alive Redemption V' , 'redAliveRedemption5.png' , 'In this game u can ' , '59.99$' , '4.0')"
        >
          <img src="redAliveRedemption5.png" class="game" />
        </div>
        <div class="price">59.99$</div>
      </div>

      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('Elden Bracelet' , 'eldenBracelet.jpg' , 'In this game u can ' , '59.99$' , '4.9')"
        >
          <img src="eldenBracelet.jpg" class="game" />
        </div>
        <div class="price">59.99$</div>
      </div>
    </div>

    <h1>On Sale</h1>
    <div class="gameList">
      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('Watch Cats' , 'watchCats.png' , 'In this game u can ' , '29.99$' , '4.5')"
        >
          <img src="watchCats.png" class="game" />
        </div>
        <div class="price">29.99$</div>
      </div>
    </div>

    <h1>Free Games</h1>
    <div class="gameList">
      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('Chess 2.0' , 'chess2.0.png' , 'In this game u can ' , 'FREE' , '4.2')"
        >
          <img src="chess2.0.png" class="game" />
        </div>
        <div class="price">FREE!</div>
      </div>

      <div class="game-wrapper">
        <div
          class="gameDiv"
          onclick="sendValue('Kenshin Impakt' , 'kenshinImpact.png' , 'In this game u can ' , 'FREE' , '3.9')"
          href="game.php"
        >
          <img src="kenshinImpact.png" class="game" />
        </div>
        <div class="price">FREE!</div>
      </div>
    </div>

    <a href="#" class="top">
      <i class="fas fa-chevron-up"></i>
    </a>

    <script src="main.js"></script>
    <script src="topBTN.js"></script>
  </body>
</html>
