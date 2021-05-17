<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        // check cookie
        if (isset($_COOKIE['loggedin_name'])) {
        $_SESSION['username'] = $_COOKIE['loggedin_name'];
        } else {
        header('location: login_admin.php');
        }
    }

    if(isset($_REQUEST['submit'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mobile'] = $_POST['mobile'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard for admin</title>
</head>
<body>
    <h1>Welcome to the Dashboard <?= $_SESSION['username'] ?></h1>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="mobile">
        <button type="submit" name="submit">Submit</button>
    </form>
    <h1><?php echo $_SESSION['name'];?></h1>
    <h3><?php echo $_SESSION['email'];?></h3>
    <h1><?php echo $_SESSION['mobile'];?></h1>
</body>
</html>