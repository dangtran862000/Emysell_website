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
        border-radius: 10px;
        border: 2px solid black;
      }

      input:focus{
        outline: none;
      }

      input[type="submit"]{
        display: inline-block;
        background-color: #17486a;
        color: white;
        text-decoration: none;

        padding: 12px;
        font-size: 14px;
        border-radius: 30px;
        transition: 0.2s;
        border: none;
      }

      input[type="submit"]:hover{
        background-color: #03BFCB;
        cursor: pointer;
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

      <input type="submit" name="Submit" value="Create" onclick="inform();">
    </form>

    <?php

      if(isset($_POST['Submit'])){
        // Make sure two passwords are the same
        if($_POST['password1'] == $_POST['password2']){
          $file = fopen('../admin.csv', 'a');
          $account  = array(htmlentities($_POST['username']), password_hash($_POST['password1'], PASSWORD_BCRYPT));
          fputcsv($file, $account);
          flock($file, LOCK_EX);
          fclose($file);
        }
      }
    ?>
    <script type="text/javascript">
      alert("Warning! After you create the account successfully, this file will be deleted. It is a neccessary step for further security");
    </script>

  </body>
</html>
