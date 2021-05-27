
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myaccount.css">
</head>
<body>
            <div class="login-myaccount" id ="login-page">
                <div class="container-login">
                    <div class="header-login">
                        <h2>LOG IN</h2>
                    </div>
                    <form name="myForm" id="myForm" class="form-login" onsubmit="return validateForm();" method = "post">

                        <div class="form-control">
                            <label for="email">Email</label>
                            <input type="email" placeholder="emysell@gmail.com" id="email-login" name="email-login" />
                            <small>Error message</small>
                        </div>

                        <div class="form-control">
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password-login" />
                            <small>Error message</small>
                        </div>

                        <input type="submit" class="input-btn" value="Submit" name ="submit">
                </div>
            </div>
    <!-- Get value from input -->
    <?php
    if(isset($_POST["submit"])){
        $email_input = $_POST["email-login"];
        $password_input = $_POST["password-login"];
        echo $email_input;
        echo "<br>";
        echo $password_input;
    }
    ?>
<?php
    $file_pointer = '../res/data.txt';
    if(file_exists($file_pointer)){
            if(isset($_POST["submit"])){
                $searchfor = $email_input;
                // get the file contents, assuming the file to be readable (and exist)
                $contents = file_get_contents($file_pointer);
                // escape special characters in the query
                $pattern = preg_quote($searchfor, '/');
                // finalise the regular expression, matching the whole line
                $pattern = "/^.*$pattern.*\$/m";
                // search, and store all matching occurences in $matches
                if (preg_match_all($pattern, $contents, $matches)) {
                    $line = implode("\n", $matches[0]);
                    $user_details = explode('||', $line);
                    $email1 = $user_details[3];
                    $password = $user_details[8];
                    $verify = password_verify($password_input, $password);
                    echo '
                        <script type="text/javascript">
                            var javaScriptVar = "<?php echo $email1; ?>"; 
                        </script>
                    ';
                }else{
                    echo "Email is not exist";
                }
            }
        }  
?> 
<script type="text/javascript">
    // var javaScriptVar = "<?php echo $email1; ?>"; 
</script>
<script src="myaccount.js"></script>
</body>
</html>
