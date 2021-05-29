<?php
echo "<script type='text/javascript'>
alert('Succes logout!');
// Set session Storage
sessionStorage.clear()
location.href='../login/myaccount.php';
 </script>";
?>