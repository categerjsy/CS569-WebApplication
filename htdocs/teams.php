<?php
include 'config.php';
session_start ();
 if (isset($_SESSION['username'])==NULL){
  header('Location: index.php');
 }
$id=$_SESSION["id_user"];
?>
<html lang='en'>
  <head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <title>AR Treasure Hunt</title>
    <link
      rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'
      integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=='
      crossorigin='anonymous'
      referrerpolicy='no-referrer'
    />
    <link rel='stylesheet' href='css/st.css' />
    <link rel='stylesheet' href='css/form.css' />
    <script type='text/javascript' src='http://static.runoob.com/assets/qrcode/qrcode.min.js'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='stylesheet' href='css/button.css' />
  </head>
  <body>
    <nav class='navbar'>
      <div class='navbar-container container'>
          <input type='checkbox' name='' id=''>
          <div class='hamburger-lines'>
              <span class='line line1'></span>
              <span class='line line2'></span>
              <span class='line line3'></span>
          </div>
          <ul class='menu-items'>
              <li><a href='homepage.php'>Home</a></li>
              <li><a href='teams.php'>Teams</a></li>
              <li><a href='createriddle.php?msg=first'>Create Riddle</a></li>
              <li><a href='createteam.php'>Create Team</a></li>
              <li><a href='createthunt.php'>Create Hunt</a></li>
              <li><a href='signout.php'>Sign out</a></li>
          </ul>
          <h1 class='logo'>AR TS</h1>
      </div>
  </nav>
    <section class='showcase-area' id='showcase'>
      <div class='showcase-container'>
        <h1 class='main-title' id='home'>Create your team!</h1>
        <p>Solve riddles and pick up coins in your treasure chest!</p>
      </div>
    </section>

    <section id='about'>
    <div class='container'>
    <?php
    $query = mysqli_query($conn, 'SELECT * FROM is_member AND id_team="');
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        $id_team=$row["id_team"];
        $role=$row["role"];
        
        $querys = mysqli_query($conn, 'SELECT * FROM team AND id_team='$id_team'');
          while ($rows = mysqli_fetch_array($querys, MYSQLI_ASSOC)) {
            $name=$rows["name"];
        echo "<div class='row'>
            <div class='col-25'>
                <p>Role</p>
            </div>
            <div class='col-75'>
                $role
            </div>
            </div>
            <div class='row'>
            <div class='col-25'>
                <p>Team's name</p>
            </div>
            <div class='col-75'>
                $name
            </div>
            </div>";
            
        }
          echo "
          </div>
          </div>
          <hr>";
    }
    ?>
    </div>
    </section>
    <footer id='footer'>
      <h2>AR Treasure Hunt &copy; </h2>
    </footer>
  </body>

 
  <script src='https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js'></script>
  <script src='js/number.js'></script>
  <script src='js/disablePreviousDates.js'></script>
</html>