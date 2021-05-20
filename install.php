<?php
  session_start();

  if(isset($_SESSION['counter'])){
    $_SESSION['counter']++;
  } else{
    $_SESSION['counter'] = 1;
  }

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">

      body{
        text-align: center;
      }

      input{
        display: block;
        margin: 0 auto;
        margin-bottom: 20px;
      }
    </style>
  </head>
  <body>

    <form class="login"  method="post" action="install.php">

      <label for="Username">Username</label>
      <input type="text" name="username">

      <label for="Password">Password</label>
      <input type="password" name="password1">

      <label for="Password">Type the password again</label>
      <input type="password" name="password2">

      <input type="submit" name="Submit" value="Submit">
    </form>

    <?php

      if(isset($_POST['Submit'])){
        if($_POST['password1'] == $_POST['password2']){
          $file = fopen('../admin.txt', 'w');
          $account  = htmlentities($_POST['username']) . "\n" . password_hash($_POST['password1'], PASSWORD_BCRYPT);
          fwrite($file, $account);
          fclose($file);
        }
      }
    ?>

  </body>
</html>
