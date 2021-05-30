<?php
// end of the session and redirect admin to the log in page
session_start();
unset($_SESSION["username"]);
header("Location:login_admin.php");
?>