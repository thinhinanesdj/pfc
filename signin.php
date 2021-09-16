
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Espace connection</title>
    <link rel="stylesheet" type="text/css" href="css/s.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php 
    require_once ("navbar.php");
    require_once ("header.php");

     ?>
    <div class="center" style="margin-top: 6%;">
      <h1>Login</h1>
      <form  action="inscription/trailo.<?php  ?>" method="post">
        <div class="txt_field">
          <input type="text" name="mail" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password"  name="mote" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>
      <footer style="margin-top: 50%">
      <?php
      include('footer.php'); 

       ?>
    </footer>

  </body>
</html>


