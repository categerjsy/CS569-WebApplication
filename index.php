<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <title>AR Treasure Hunt</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="connect.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <?php
              if (isset($_GET["msg"]) && $_GET["msg"] == 'wrong') {
                  print "<p style='color: red;'>Something went wrong! Please try again.</p>";
              }
              if (isset($_GET["msg"]) && $_GET["msg"] == 'up') {
                print "<p style='color: green;'>Great you have an account.Sign In!</p>";
            }
            ?>
            <label for="username">Username:</label>
            <div class="input-field">
              <input type="text" name="username" required/>
            </div>
            <label for="password">Password:</label>
            <div class="input-field">
              <input type="password" name="password" required/>
            </div>
            <input type="submit" name='signin' value="Login" class="btn solid" />
          </form>

          <form action="connect.php" method="post" class="sign-up-form" >
            <h2 class="title">Sign up</h2>
            <label for="username">Username:</label>
            <div class="input-field">
              <input type="text" name="username" id="username" required/>
            </div>
            <label for="email">Email:</label>
            <div class="input-field">
              <input type="email" name="email" id="email" required/>
            </div>
            <label for="fullName">Full name:</label>
            <div class="input-field">
            <input type="text" name="fullName" id="fullName" required/>
            </div>
            <label for="dateOfBirth">Date of Birth:</label>
            <div class="input-field">
            <input type="date"  name="dateOfBirth" value="2022-04-18" min="1928-02-20" max="<?php echo date('Y-m-d');?>">
            </div>
            <label for="password">Password:</label>
            <div class="input-field">
              <input type="password" name="password" id="password" required/>
            </div>
            <label for="confirmPassword">Confirm Password:</label>
            <div class="input-field">
              <input type="password" name="cpassword" id="confirm_password" required/>
            </div>
            <span id='message'></span>
            <input type="submit" name='signup' class="btn" value="Sign up" required/>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Create your own treasure hunts! Discover,learn and play with your friends.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Sign in to create your treasure hunts!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    <script src="js/password.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>