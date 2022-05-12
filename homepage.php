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
    <link rel='stylesheet' href='sweetalert.css'>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
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
        <h1 class="main-title" id="home">Be a pirate!</h1>
        <p>Solve riddles and pick up coins in your treasure chest!</p>
        <!--<a href="#food-menu" class="btn btn-primary">Menu</a>-->
      </div>
    </section>
    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
        
          <p class="small">About Us</p>
          <h2>Kati  na leei ti orama exoume :#</h2>
          <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse ab
            eos omnis, nobis dignissimos perferendis et officia architecto,
            fugiat possimus eaque qui ullam excepturi suscipit aliquid optio,
            maiores praesentium soluta alias asperiores saepe commodi
            consequatur? Perferendis est placeat facere aspernatur!
          </p>
        </div>
        <div class="about-img">
          <img src="img/treasure-svgrepo-com.svg" alt="food" />
        </div>
      </div>
    </section>
    
    <footer id="footer">
      <h2>AR Treasure Hunt &copy; </h2>
    </footer>
  </body>
  <script>
    window.onload = function riddle() {
      <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'riddle') { ?>
        Swal.fire(
            'Good job!',
            'Your riddle is ready!',
            'success'
        )
        <?php }?>
        <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'team') { ?>
        Swal.fire(
            'Good job!',
            "You created your team.That's amazing!",
            'success'
        )
        <?php }?>
        <?php  if (isset($_GET["msg"]) && $_GET["msg"] == 'hunt') { ?>
        Swal.fire(
            'Good job!',
            "You created your hunt.That's amazing!</p>",
            'success'
        )
        <?php }?>
    }

  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  
</html>