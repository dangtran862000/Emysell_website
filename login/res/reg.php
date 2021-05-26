<!DOCTYPE html>
<html>
<head>
  <title>Store form data in .txt file</title>
</head>
<link rel="stylesheet" href="regist.css">
<body>

  <div class="register-page" style="margin-top:0; padding-top:5%">
    <div class="form">
      <h1><b>Register</b></h1>
        <form class="register-form" name="form" onsubmit="validated(); return false;" method="post">
              <input type="text" placeholder="First name" class="clear" name="fname" />
              <div id="fname-error">First name must include at least 3 character</div>

              <input type="text" placeholder="Last name" class="clear" name="lname" />
              <div id="lname-error">Last name must include at least 3 character</div>
                
              <input type="submit" name="submit" id='btn'>
        </form>
    </div>
  </div>



  <script src="log.js"></script>
</body>
</html>
<?php
if(isset($_POST['fname'])&&($_POST['fname']=='John'))
{
$data=$_POST['fname']. '-' . $_POST['lname'] . "\n";;
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>