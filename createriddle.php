<?php
include 'config.php';
session_start ();
 if (isset($_SESSION["username"])==NULL){
  header("Location: index.php");
 }

?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AR Treasure Hunt</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/st.css" />
    <link rel="stylesheet" href="css/form.css" />
  </head>
  <body>
    <nav class="navbar">
      <div class="navbar-container container">
          <input type="checkbox" name="" id="">
          <div class="hamburger-lines">
              <span class="line line1"></span>
              <span class="line line2"></span>
              <span class="line line3"></span>
          </div>
          <ul class="menu-items">
              <li><a href="homepage.php">Home</a></li>
              <li><a href="#teams">Teams</a></li>
              <li><a href="createriddle.php">Create Riddle</a></li>
              <li><a href="createteam.php">Create Team</a></li>
              <li><a href="createthunt.php">Create Hunt</a></li>
              <li><a href="signout.php">Sign out</a></li>
          </ul>
          <h1 class="logo">AR TS</h1>
      </div>
  </nav>
    <section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title" id="home">Create your team!</h1>
        <p>Solve riddles and pick up coins in your treasure chest!</p>
      </div>
    </section>

    <section id="about">
    <div class="container">
    <form action="criddle.php" method="post">
    <div class="row">
      <div class="col-25">
        <label for="textRiddle">Riddle's text</label>
      </div>
      <div class="col-75">
      <textarea id="riddleText" name="riddleText" rows="4" cols="50">
        Please write your riddle's text here
      </textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="solution">Riddle's solution</label>
      </div>
      <div class="col-75">
        <input type="text" id="solution" name="solution" placeholder="Riddle's solution" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="objectAR">Object AR</label>
      </div>
      <div class="col-75">
        <select id="object" name="object">
          <option value="GoldCoin">Gold Coin</option>
          <option value="SilverCoin">Silver Coin</option>
          <option value="BronzeCoin">Bronze Coin</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image">Image for winning</label>
      </div>
      <div class="col-75">
      <input type="file" name="pik-pok_db" id="real-file" hidden="hidden"/>
      <button type="button" id="custom-button" name="upload">Choose a photo!</button>
      <span id="custom-text">No file choosen, yet.</span>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="textInfo">Information text</label>
      </div>
      <div class="col-75">
      <textarea id="infoText" name="infoText" rows="4" cols="50">
        Please write your information text here
      </textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="number">Number of team players</label>
      </div>
      <!-- <div class="col-75"> -->
        <div class="quantity">
        <input type="number" name="number" min="1" step="1" value="1">
        </div>
      </div>
    <!-- </div> -->
    <div class="row">
      <input type="submit" value="Create Riddle">
    </div>
  </form>
</div>
    </section>
    <footer id="footer">
      <h2>AR Treasure Hunt &copy; </h2>
    </footer>
  </body>
  
   <script src="js/number.js"></script>
   <script src="js/disablePreviousDates.js"></script>
</html>