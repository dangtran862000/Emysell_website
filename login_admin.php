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

  if (isset($_POST['act'])) {
    foreach ($user_record as $records){
        if (isset($_POST['pass']) && $_POST['username'] == html_entity_decode($records[0]) && password_verify($_POST['pass'], $records[1])) {
          // create a cookie that expires after 7 days
          setcookie('loggedin_name', htmlentities($_POST['username']), time() + 60 * 60 * 24 * 7);
          $_SESSION['username'] = htmlentities($_POST['username']);
          header('location: dashboard.php');
        }
    }
    $status = 'Invalid username/password';

  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    form div {
      margin: 20px 50px;
    }
    .error {
      background-color: red;
    }
  </style>
</head>
<body>
<?php
  if (isset($status)) {
    echo "<h3 class=\"error\">$status</h3>";
  }
?>
  <h2>Login Form For Admin</h2>
  <form method="post" action="login_admin.php">
    <div>
      Username<br>
      <input type="text" name="username">
    </div>
    <div>
      Password<br>
      <input type="password" name="pass">
    </div>
    <div>
      <input type="submit" name="act" value="Login">
    </div>
  </form>
</body>
</html>
