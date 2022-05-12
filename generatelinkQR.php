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
    <div class="row">
      <div class="col-25">
          <p>Please sent this link to your team!</p>
      </div>
      <div class="col-75">
      <?php $team=$_SESSION["id_team"];
       echo "<a>https://localhost/CS569-WebApplication/participateTeam.php?id=$team</a>"
      ?>
      </div>
    </div>
    <div class="row">
    <div class="col-25">
    <p>OR</p>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
      <p>Please sent this QRCode to your team!</p>
      </div>
      <div class="col-75">
      <div id="qrcode"></div>
      </div>
    </div>
    </div>
    <div class="row">
    </div>

</div>
    </section>
    <footer id="footer">
      <h2>AR Treasure Hunt &copy; </h2>
    </footer>
  </body>
  <script>
    window.onload = function qr() {
    const qrcode = new QRCode(document.getElementById('qrcode'), {
    text: "https://localhost/CS569-WebApplication/participateTeam.php?id="+"<?php echo $_SESSION['id_team'] ?>",
    width: 128,
    height: 128,
    colorDark : '#000',
    colorLight : '#fff',
    correctLevel : QRCode.CorrectLevel.H
    });
    }
  </script>
  <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
   <script src="js/number.js"></script>
   <script src="js/disablePreviousDates.js"></script>
</html>