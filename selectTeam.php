<?php
include 'config.php';
session_start ();

 if (isset($_SESSION['username'])==NULL){
  header('Location: index.php');
 }
$id=$_SESSION["id_user"];
?>
<html l'en'>
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
              <li><a href='treasurehunts.php'>Treasure hunt</a></li>
              <li><a href='signout.php'>Sign out</a></li>
          </ul>
          <h1 class='logo'>AR TS</h1>
      </div>
  </nav>
    <section class='showcase-area' id='showcase'>
      <div class='showcase-container'>
        <h1 class='main-title' id='home'>Let's see your teams!</h1>
        <p>Solve riddles and pick up coins in your treasure chest!</p>
      </div>
    </section>

    <section id='about'>
    <div class='container'>
    </br></br>
    <h2>Your teams:</h2>
    <?php
  
    $my_user=$_SESSION["id_user"] ;
    echo "<form action='partTh.php' method='post'>";
    $query = mysqli_query($conn, "SELECT * FROM is_member WHERE id_user='$my_user' AND role='leader'");
    
    $test=0;
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
      echo "<select id='team' name='team'>";
      $id_team=$row['id_team']; 

      $queryt = mysqli_query($conn, "SELECT * FROM team WHERE id_team='$id_team'");

      while ($rowt = mysqli_fetch_array($queryt, MYSQLI_ASSOC)) {
        $teams_name=$rowt['name'];
        echo "<option value='$id_team'>$teams_name</option>";  
        $test=1;
      }
      echo "</select>";	
      echo  
        "</br>
        </br>
        </br>
        <div class='row'>
          <input type='submit' value='Participate'>
        </div>";
    
     }
     
    if ($test==0) { 
      echo "</br></br><h3>You are not a leader of any team! :/<h3></br></br>";
    }
    echo "</form>";      
    ?>
    </br></br>
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