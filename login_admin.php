<?php
  session_start();

  function createArray($filename){
    $records = array();
    $fp = fopen($filename, "r");

    while ($aLineOfCells = fgetcsv($fp)) {

          $records[] = $aLineOfCells;

    }
    fclose($fp);

    return $records;
  }
  $filename = "../admin.csv";
  $user_record = createArray($filename);

  // Check if the log in information of the user is in the system, if yes redirect to the dashboard
  if (isset($_POST['act'])) {
    foreach ($user_record as $records){
<<<<<<< HEAD
        if (isset($_POST['pass']) && $_POST['username'] == html_entity_decode($records[0]) && password_verify($_POST['pass'], $records[1])) {
=======
        if (isset($_POST['pass']) && $_POST['username'] == $records[0] && password_verify($_POST['pass'], $records[1])) {
>>>>>>> 016f4dfe0d05a8ba691d34b93f880175327b4f36
          // create a cookie that expires after 7 days
          setcookie('loggedin_name', htmlentities($_POST['username']), time() + 60 * 60 * 24 * 7);
          $_SESSION['username'] = htmlentities($_POST['username']);
          header('location: dashboard.php');
        }
    }
    // Inform admin
    $status = 'Invalid username/password';

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="StyleSheet1.css">
</head>
<body style="background-color:black;">
  <div class="login-page" style="padding-top: 20%; padding-bottom: 30%;">
        <div class="form">
            <h1><b>Admin Login</b></h1>
            <form class="login-form" method="post" action="login_admin.php">
                <input type="text" placeholder="username" name="username" />
                <input type="password" placeholder="password" name="pass" />
                <button type="submit" name="act" style="background-color:black">login</button>
                <p class="message">Not registered? <a href="install.php">Create an account</a></p>
                <p class="message"><a href="forgetpasswork.html">Forgot the password</a></p>
                <?php
                    if (isset($status)) {
                      echo "<p class=\"error\">$status</p>";
                    }
                ?>
            </form>
        </div>
    </div>
   
</body>
</html>
