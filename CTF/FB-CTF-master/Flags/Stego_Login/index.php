<?php
setcookie('auth', 'false', time() + (86400 * 30), "/");
setcookie('session', 'SGFjayBhbGwgdGhlIHRoaW5ncyE=', time() + (86400 * 30), "/");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Log-in</title>
    
    
    
    <link rel='stylesheet prefetch' href='./scripts/login.css'>

        <link rel="stylesheet" href="style/loginstyle.css">

    
    
    
  </head>

  <body>

    <div class="login-card">
    <h1>Login</h1><br>
  <form id="form" name="form" action="login.php" method="post">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
    <script src='./scripts/login1.js'></script>
<script src='./scripts/login2.js'></script>
    
    
    
    
  </body>
</html>

