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
    <link rel="stylesheet" href="css/disclaimer.css" />
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&family=Indie+Flower&family=Supermercado+One&display=swap" rel="stylesheet">
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
              <li><a href='teams.php'>Teams</a></li>
              <?php 
              $diff=$_SESSION["age"];
              if($diff>14){
              echo "<li><a href='createriddle.php?msg=first'>Create Riddle</a></li>
                    <li><a href='createteam.php'>Create Team</a></li>
                    <li><a href='createthunt.php'>Create Hunt</a></li>";
              }
              ?>
              
              <li><a href='treasurehunts.php'>Treasure hunt</a></li>
              <li><a href="signout.php">Sign out</a></li>
          </ul>
          <h1 class="logo">AR TS</h1>
      </div>
  </nav>
    <section class="showcase-area" id="showcase">
      <div class="showcase-container">
        <h1 class="main-title" id="home">Be a pirate!</h1>
        <p>Solve riddles and pick up coins in your treasure chest!</p>
      </div>
    </section>
    <section id="about">
      <div class="about-wrapper container">
        <div class="about-text">
          <p class="small">Treasure Hunt</p>
          <h2>Build the ultimate treasure hunt!</h2>
          <p>
            1. Plan your route
          </p>
          <p>
            2. Scout out locations
          </p>
          <p>
            3. Write and number the clues, and put them in numbered envelopes
          </p>
          <p>
            4. Give yourself lots of time to plan
          </p>
          <p>
            5. Set it up
          </p>
          <p>
            6. Prepare for contingencies
          </p>
          <p>
            7.Add in some random rewards to keep things interesting
          </p>
          <p>
            8. Set ground rules in advance
          </p>
          <p>
            9. Go with them
          <p>
            10. Have good time!
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
    window.onload = function mess() {//na allaksw name
      <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'riddle') { ?>
        Swal.fire(
            'Good job!',
            'Your riddle is ready!',
            'success'
        )
        <?php }?>
        <?php if (isset($_GET["msg"]) && $_GET["msg"] == 'team') { ?>
        swal({
          title: "Success!",
          text: "You created your team.That's amazing!",
          type: "success",
          timer: 2000,
          showConfirmButton: false
        }, function(){
              window.location.href = "/generatelinkQR.php";
        });
        <?php }?>
        <?php  if (isset($_GET["msg"]) && $_GET["msg"] == 'hunt') { ?>
          swal({
          title: "<h1>Success!</h1>",
          text: "<h2>You created your treasurehut.That's amazing!Now lets add riddles!</h2>",
          type: "success",
          timer: 2000,
          showConfirmButton: false
        }, function(){
              window.location.href = "/addriddles.php";
        });
        <?php }?>
        <?php  if (isset($_GET["msg"]) && $_GET["msg"] == 'huntpart') { ?>
          swal({
          title: "Success!",
          text: "Your team is ready to participate to a treasure hunt.That's amazing!Now inform your team!",
          type: "success",
          timer: 2000,
        }, function(){
              window.location.href = "/homepage.php";
        });
        <?php }?>
        <?php  if (isset($_GET["msg"]) && $_GET["msg"] == 'edhunt') { ?>
          swal({
          title: "Success!",
          text: "You edited your treasure hunt.That's amazing!Now lets change your riddles!",
          type: "success",
          timer: 2000,
          showConfirmButton: false
        }, function(){
              window.location.href = "/addriddles.php";
        });
        <?php }?>
        <?php  if (isset($_GET["msg"]) && $_GET["msg"] == 'teampart') { ?>
          swal({
          title: "Success!",
          text: "Congratulations! You are a part of a team!",
          type: "success",
          timer: 2000,
          showConfirmButton: false
        }, function(){
              window.location.href = "/homepage.php";
        });
        <?php }?>
    }

  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  
</html>