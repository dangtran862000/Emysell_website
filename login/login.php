
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="myaccount.css">
</head>
<body>
            <div class="login-myaccount" id ="login-page">
                <div class="container-login">
                    <div class="header-login">
                        <h2>LOG IN</h2>
                    </div>
                    <form action ="login.php" name="myForm" id="myForm" class="form-login" onsubmit = "return validateForm();" method = "post">
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


<!-- PHP SECTION TO VALIDATE LOGIN FROM REGISTRATION -->

    <?php
    // Check the submit
    if(isset($_POST["submit"])){
        $email_input = $_POST["email-login"];
        $password_nothas_input = $_POST["password-login"];

        // Assign variable for file registration
        $file_pointer = '../data.txt';
        // Assign the variable for email input
        $searchfor_email = $email_input;
        // get the file contents
        if (isset($file_pointer)){
        $contents = file_get_contents($file_pointer);
        // escape special characters in the query
        $pattern = preg_quote($searchfor_email, '/');
        // finalise the regular expression, matching the whole line
        $pattern = "/^.*$pattern.*\$/m";
        // search, and store all matching occurences in $matches
        if (preg_match_all($pattern, $contents, $matches)) {
            $line = implode("\n", $matches[0]);
            $user_details = explode('||', $line);
            // $email = $user_details[3];
            $password = $user_details[8];
            // Verify password
            if (password_verify( $password_nothas_input, $password)) {
                    echo '<script type="text/javascript">
                            alert("Succes login!");
                            // Set session Storage
                            sessionStorage.setItem("isLog", true);
                            </script>';
                } 
                // If password is not matching, announce
                else {
                    echo '<script type="text/javascript">
                        alert("Password is not correct!");
                    </script>';                  
                }
        } 
        //  If email is not found
        else {
                echo '<script type="text/javascript">
                        alert("Email is not exist!");
                </script>';
        }
    }
}




?>
<script src="myaccount.js"></script>
</body>
</html>
