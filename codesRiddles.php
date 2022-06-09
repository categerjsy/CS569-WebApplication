<?php
include 'config.php';
session_start ();
 if (isset($_SESSION["username"])==NULL){
  header("Location: index.php");
 }

$thunt=$_SESSION["th"];

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
    <link rel="stylesheet" href="css/button.css" />
    <link rel="stylesheet" href="css/disclaimer.css" />
    <script type="text/javascript" src="http://static.runoob.com/assets/qrcode/qrcode.min.js"></script>
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
        <h1 class="main-title" id="home">Create your team!</h1>
        <p>Solve riddles and pick up coins in your treasure chest!</p>
      </div>
    </section>

    <section id="about">
    <div class='container'>
    <?php
    $Qrcodes=array();
     $query = mysqli_query($conn, "SELECT * FROM has WHERE id_thunt='$thunt'");
     while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
         $riddle=$row["id_riddle"];
         $queryr = mysqli_query($conn, "SELECT * FROM riddle WHERE id_riddle='$riddle'");
         while ($rowr = mysqli_fetch_array($queryr, MYSQLI_ASSOC)) {
         $text=$rowr['text'];
        $location_solution=$rowr['location_solution'];
        $object=$rowr['object_AR'];
        $infotext=$rowr['infotext'];
        $points=$rowr['points'];
        $link=$rowr['riddle_link'];
        array_push($Qrcodes,$link);
        echo "<div class='row'>
          <div class='col-25'>
            <p>Riddle's Text</p>
          </div>
          <div class='col-75'>
            $text
          </div>
          </div>
          <div class='row'>
          <div class='col-25'>
            <p>Riddle's solution</p>
          </div>
          <div class='col-75'>
            $location_solution
          </div>
          </div>
          <div class='row'>
          <div class='col-25'>
            <p>Riddle's Object</p>
          </div>
          <div class='col-75'>
            $object
          </div>
          </div>
          <div class='row'>
          <div class='col-25'>
            <p>Riddle's Information</p>
          </div>
          <div class='col-75'>
            $infotext
          </div>
          </div>
          <div class='row'>
          <div class='col-25'>
            <p>Riddle's point</p>
          </div>
          <div class='col-75'>
            $points
          </div>
          </div>
          <div class='row'>
          <div class='col-25'>
          </div>
          <div class='col-75'>
          <div class='row'>
            <div class='col-25'>
            <p>Please save this QRCode for your treasure hunt.</p>
            </div>
            <div class='col-75'>
            <div class='qrCode' data-qrcodeval='$link'></div> 
            
            </div>
        </div>
            </div>
        <div class='row'>
        </div>";
         }
     }
     ?>
    </div>

    </section>
    <footer id="footer">
      <h2>AR Treasure Hunt &copy; </h2>
    </footer>
  </body>
  <script>

window.onload = function ()
{
  $(".qrCode").each(function() {
    $(this).qrcode({

      // render method: 'canvas', 'image' or 'div'
      render: 'canvas', //'div',

      // version range somewhere in 1 .. 40
      minVersion: 1,
      maxVersion: 40,

      // error correction level: 'L', 'M', 'Q' or 'H'
      ecLevel: 'L',

      // offset in pixel if drawn onto existing canvas
      left: 0,
      top: 0,

      // size in pixel
      size: 100,

      // code color or image element
      fill: '#fff',

      // background color or image element, null for transparent background
      background: null,

      // content
      text: $(this).data('qrcodeval'),

      // corner radius relative to module width: 0.0 .. 0.5
      radius: 0,

      // quiet zone in modules
      quiet: 0,

      // modes
      // 0: normal
      // 1: label strip
      // 2: label box
      // 3: image strip
      // 4: image box
      mode: 0,

      mSize: 0.1,
      mPosX: 0.5,
      mPosY: 0.5,

      label: 'no label',
      fontname: 'sans',
      fontcolor: '#fff',

      image: null
    });
  });
}
</script>
<script>
  function downloadURI(uri, name) {
  var link = document.createElement("a");
  link.download = name;
  link.href = uri;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
  delete link;
  };


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://html2canvas.hertzen.com/build/html2canvas.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.qrcode/1.0/jquery.qrcode.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/davidshimjs/qrcodejs/qrcode.min.js"></script>
  <script src="js/number.js"></script>
  <script src="js/disablePreviousDates.js"></script>
</html>