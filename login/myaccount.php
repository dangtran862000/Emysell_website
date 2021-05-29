<?php
  session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Account</title>
    <link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="myaccount.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body onload="check(); HiddenSignup();">


    <!--Header Area-->
    <header>
        <!--Navigation area-->
        <nav class="navbar" id="myTopnav">
            <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
            <a class="navbar-brand" href="..\index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="..\image\logo123.png" class="img-fluid" alt="img_logo_website">
                </div>
            </a>

            <a href="..\index.php">Home</a>
            <a href="..\aboutus.php">About us</a>
            <a href="..\fee.php">Fees</a>
            <a href="..\login\myaccount.php">My Account</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Browse
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="..\browsebycate.php">Browse by categories</a>
                    <a href="..\browsebyname.php">Browse by name</a>
                </div>
            </div>
            <a href="..\faq.php">FAQS</a>
            <a href="..\contact.php">Contact</a>
            <a id='signup' class="signup" href="..\login\myaccount.php" style="padding:0;">
                <p class="button">Sign Up</p>
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>


    <main>
        <section class="account-body">
            <div class="login-myaccount" id ="login-page">
                <div class="container-login">
                    <div class="header-login">
                        <h2>LOG IN</h2>
                    </div>
                    <form action ="myaccount.php" name="myForm" id="myForm" class="form-login" onsubmit = "return validateForm();" method = "post">
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
                        
                        <!-- ADJUST LINK TO REGIST -->
                        <p class="message">Not registered? <a href="../res/registration_account.php" style="text-decoration:none">Create an account</a></p>
                        <!-- ADJUST LINK TO REGIST -->
                        
                        
                        <p class="message"><a href="..//forgot_password.html" style="text-decoration:none">Forgot the password</a></p>
                    </form>
                </div>
            </div>

<!-- PHP SECTION TO VALIDATE LOGIN FROM REGISTRATION -->

    <?php
    // Check the submit
    if(isset($_POST["submit"])){
        $email_input = $_POST["email-login"];
        $password_nothas_input = $_POST["password-login"];

        // Assign variable for file registration
        $file_pointer = '../res/data.txt';
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



        </section>
        <div class="information-account" id = "info-page">
            <div class="grid_2_items" style="background-color:#f4f4f4; padding-right:5%">
                <!--The first column-->
                <div style="flex: 1" >
                    <!--Avatar-->

                    <img class="cicrle-ava center_img" alt="myava" src="..\image\ava.jpg" alt="image_ava_account"/>

                    <!--LIST OF THE FEATURES-->
                    <ul class="no-bullets">
                        <li class="flex_1">
                            <!--Icon-->
                            <img class="icons" src="https://img.icons8.com/pastel-glyph/64/000000/person-male--v3.png" alt="icon_account"/>
                            <a href="account.html"><span>My Account</span></a>
                        </li>
                        <li class="flex_1">
                            <!--Icon-->
                            <img class="icons" src="https://img.icons8.com/material-rounded/64/000000/appointment-reminders.png" alt="icon_notification"/>
                            <a><span>Notification</span></a>
                        </li>

                        <li class="flex_1" style="padding-right: 0%;">
                            <!--Icon-->
                            <img class="icons" src="https://img.icons8.com/fluent-systems-filled/100/000000/purchase-order.png" alt="icon_order"/>
                            <a><span>My Orders</span></a>
                        </li>


                        <li class="flex_1">
                            <!--Icon-->
                            <img class="icons" src="https://img.icons8.com/material/24/000000/worldwide-location--v1.png" alt="icon_location"/>
                            <a><span>Billing Address</span></a>
                        </li>

                        <li class="flex_1">
                            
                            <!--Icon-->
                            <form action="./logout_account.php" method="post">
                            <img class="icons" src="https://img.icons8.com/windows/32/000000/users-settings.png" alt="icon_setting"/>
                            <button type="submit" id="signout">SIGN OUT</button>
                            <!-- <a href="../login/myaccount.php" onclick = "session_destroy();" style="padding-left: 3%;"><span>SIGN OUT</span></a> -->   
                        </form>
                        </li>

                    </ul>
                </div>

                <!--The second column-->
                <div style="flex: 5" class="myinformation_form">
                    <h1>My information</h1>
                    <div class="account_form" style="background-color:white; padding:3%; margin-bottom:5%;">
                        <form>

                            <div class="flex_horizone">

                                <div class="grid_3_items">
                                    <label style="width: 30%;" for="fname">Name</label>
                                    <input type="text" id="fname" name="name" value="Van Anh">
                                    <br />
                                    <br />
                                </div>

                                <div class="grid_3_items">
                                    <label style="width: 30%;" for="phone">Phone number</label>
                                    <input type="text" id="phone" name="phone" value="0768044388">
                                    <br />
                                    <br />
                                </div>

                                <div class="grid_3_items">
                                    <label style="width: 30%;" for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Your email">
                                    <br />
                                    <br />
                                </div>

                                <div class="grid_2_items">
                                    <div class="grid_3_items" style="justify-content:normal; grid-gap:23%">
                                        <div>
                                            <label for="email">Gender</label>
                                        </div>
                                        <div class="grid_2_items">
                                            <div>
                                                <input type="radio" id="female" name="gender" value="female" checked>
                                                <label for="female" >Female</label><br>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <br />
                                </div>

                                <div style="justify-content:flex-end; width:100%; display:flex; display: none;">
                                    <input class="button" type="submit" value="Save">
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div id="cookies">
      <h3>I use cookies</h3>
      <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
      <button type="button" name="button" onclick="agree();">I understand</button>
      <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
    </div>

    <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
        <footer style="background-color: #131a22; color:white; padding-bottom:5%;">
            <div class="flex">
                <!--Zero Columns-->
                <div class="footer_column0" style="flex: 2; margin: 1% 5% 0 5%">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="..\\image\logo123.png" width="20%" alt="image_logo_website"/>
                    <p style="font-size:13px">EmySell is the lastest website for whom who are looking for the place to start their business. We provided the solution to help our potential custumers to achive the greatest outcome for their first start</p>
                </div>
                <!--First Columns-->
                <div class="footer_column1" style="flex: 1;font-size:10px;">
                    <h2>Contact us</h2>
                    <h3><i class="fa fa-envelope"></i> Email: cinemax@gmail.com</h3>
                    <h3><i class="fa fa-phone" aria-hidden="true" style='font-size:15px'></i> Phone: 09737283823</h3>
                    <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Ho Chi Minh City</h3>
                </div>
                <!--Second Columns-->
                <div class="footer_column2" style="flex: 1; font-size:10px;" >
                    <h2>Members List</h2>
                    <h3>La Tran Hai Dang - s3836605</h3>
                    <h3>Huynh Van Anh - s3836320</h3>
                    <h3>Pham Gia Nguyen - s3819521</h3>
                    <h3>Ngo My Quynh - S3836322</h3>
                </div>

                <!--Third Columns-->
                <div style="flex: 0.25" class="footer_column3">
                    <!--Remember to add link Github-->
                    <h3><a href="https://morioh.com/p/c479c01cf484" style="text-decoration: none"><i class="fa fa-github" aria-hidden="true"></i></a></h3>
                    <h3><i class="fa fa-facebook-official" aria-hidden="true"></i></h3>
                    <h3><i class="fa fa-twitter" aria-hidden="true"></i></h3>
                </div>
            </div>

            <div class="footer_col">
              <a href="tos.php"><span>Terms of Service</span></a>
              <a href="privacypolicy.php"><span>Privacy Policy</span></a>
              <a>
                  <span> 
                  <?php 
                   if (!isset($_SESSION['cr'])  && empty($_SESSION['cr'])){
                      $_SESSION['cr'] = '© 2021, EmySell.com, Inc. or its affiliates';
                          echo $_SESSION['cr'];
                      } else {
                      echo $_SESSION['cr'];
                  }
                  ?>
                  </span>
              </a>
            </div>

        </footer>

        </footer>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
        $('.autoplay').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            dots: true,
            arrows: true
        });
    </script>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>
    <script type="text/javascript" src="../productcategory_productdetail_productcreateTime/javascript.js"></script>

    <script src="myaccount.js"></script>

</body>
</html>
