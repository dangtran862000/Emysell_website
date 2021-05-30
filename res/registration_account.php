<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EmySell</title>
    <link rel="stylesheet" href="regist.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList provided by Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
</head>
<body style="background-color:black" onload="check();">


    <!--Header Area-->
    <header>
        <!--Navigation area-->
        <nav class="navbar" id="myTopnav">
            <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
            <a class="navbar-brand" href="../index.php">
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


    <div class="register-page" style="margin-top:0; padding-top:5%">
        <div class="form">
            <h1><b>Register</b></h1>
            <form class="register-form" name="form" onsubmit=" return validated();" method="post">
                <input type="text" placeholder="First name" class="clear" name="fname" />
                <div id="fname-error">First name must include at least 3 character</div>

                <input type="text" placeholder="Last name" class="clear" name="lname" />
                <div id="lname-error">Last name must include at least 3 character</div>

                <input type="text" placeholder="Email Address" id="clear" name="email" />
                <div id="email_error">Please enter the valid email</div>

                <input type="text" placeholder="Phone number" id="clear" name="phone" />
                <div id="phone_error">Please enter the valid phone number</div>

                <input type="text" placeholder="Address" id="clear" name="address" />
                <div id="address_error">Please enter the valid address</div>

                <input type="text" placeholder="City" id="clear" name="city" />
                <div id="city_error">Please enter the valid address</div>

                <!--Constrains 4 - 9 digits number-->
                <!--pattern="\d{4}"-->
                <input type="text" placeholder="Zipcode" id="clear" name="zipcode" />
                <div id="zipcode_error">Please enter the valid zipcode</div>


                <!--Country-->
                <div style="float:left">
                    <label for="s_adult">Country</label>
                    <select name="s_adult" id="s_adult">
                        <option disabled selected value="">Select Option</option>
                        <option value="Afghanistan">AF</option>
                        <option value="Åland Islands">AX</option>
                        <option value="Albania">AL</option>
                        <option value="Algeria">DZ</option>
                        <option value="American Samoa">AS</option>
                        <option value="Andorra">AD</option>
                        <option value="Angola">AO</option>
                        <option value="Anguilla">AI</option>
                        <option value="Antarctica">AQ</option>
                        <option value="Antigua and Barbuda">AG</option>
                    </select>
                </div>

                <div style="clear:both" id="country_error"><br /><br />Please choose one of the country option</div>
                <br /><br /><br />
                <input type="password" placeholder="Password" id="clear" name="password" />
                <div id="password_error">The passwork must contains 8 - 20 characters which includes at least 1 lower case letter, at least 1 upper case letter, at least 1 digit, and at least 1 special character (such as ! or &)</div>

                <input type="password" placeholder="Retype password" id="clear" name="repassword" />
                <div id="repassword_error">Does not match the below Password</div>

                <h3 style="float:left">Profile upload</h3>
                <input type="file" id="myFile clear" name="filename">
                <div style="text-align:left">
                    <h3>Account type</h3>
                </div>

                <div class="flex_horizone">
                    <div class="grid_2_items" style="float:left">
                        <input checked type="radio" onclick="javascript:checkRadio();" id="shopper" name="type" value="shopper" style="width:20px;">
                        <label for="female">Shopper</label>
                    </div>
                    <div class="grid_2_items">
                        <input type="radio" onclick="javascript:checkRadio();" id="store" name="type" value="store" style="width:20px;">
                        <label for="male">Store Owner</label>
                    </div>
                </div>

                <div id="storeowner">
                    <input type="text" placeholder="Bussiness name" id="clear" name="business_name" />
                    <div id="business_error">Please enter the valid business name</div>

                    <input type="text" placeholder="Store name" id="clear" name="store_name" />
                    <div id="store_error">Please enter the valid store name</div>
                    <!--Store Categories-->
                    <div style="float:left">
                        <label for="s_adult">Store Categorires</label>
                        <select name="s_adult1" id="s_adult1">
                            <option disabled selected value="">Select Option</option>
                            <option value="department">Department stores</option>
                            <option value="grocery">Grocery stores</option>
                            <option value="restaurants">Restaurants</option>
                            <option value="clothing">Clothing stores</option>
                            <option value="accessory">Accessory stores</option>
                            <option value="pharmacies">Pharmacies</option>
                            <option value="technology">Technology stores</option>
                            <option value="pet">
                                Pet stores
                            </option>
                            <option value="toy">
                                Toy stores
                            </option>
                            <option value="specialty">
                                Specialty stores
                            </option>
                        </select>
                    </div>
                    <div style="clear:both" id="castore_error"><br /><br />Please choose one of the store option</div>
                    <br /><br /><br />
                </div>


                <div class="grid_2_items">
                    <input type="submit" value="CREATE">
                    <input type="reset" value="CLEAR">
                </div>



                <p class="message">Already registered? <a href="../Myaccount/myaccount.html">Sign In</a></p>
            </form>
        </div>
    </div>
<!-- Validate and save data input into file -->
<?php
// Check the existing of phone
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $s_adult = $_POST['s_adult'];
    $password = $_POST['password'];
    // Hashing password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $type = $_POST['type'];
    $businessName = $_POST['business_name'];
    $storeName = $_POST['store_name'];

    // Select file in this link
    $file = file_get_contents("../../data.txt");
    // Check the unique of phone and email
    $string = "$phone||$email";
    //  If email and phone is unique
    if (!strstr($file, "$phone") && !strstr($file, "$email")) {
        $myFile = "../../data.txt";
        $fh = fopen($myFile, 'a') or die("can't open file");
        // Save data into file
        $stringData = "$fname||$lname||$phone||$email||$address||$city||$zipcode||$s_adult||$hashed_password||$type||$businessName||$storeName\n";
        fwrite($fh, $stringData);
        echo "your Registration Information Successfully Inserted.";
        fclose($fh);
        echo "<script>location.href='../login/myaccount.php';</script>";
    } 
    // If phone is not unique 
    elseif (strstr($file, "$phone") && !strstr($file, "$email")) {
        echo '<script type="text/JavaScript">
            alert("Your phone is not uinique");
            </script>';
    } 
    //  If email is not unique
    elseif (!strstr($file, "$phone") && strstr($file, "$email")) {
        echo '<script type="text/JavaScript">
            alert("Your email is not uinique");
            </script>';
    } 
    //  Phone and Email is not unique
    else {
        echo '<script type="text/JavaScript">
            alert("Your phone and email is not uinique");
            </script>';
    }
}
?>
    <div id="cookies">
        <h3>I use cookies</h3>
        <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
        <button type="button" name="button" onclick="agree();">I understand</button>
        <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
    </div>
    <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
    <footer style="background-color: #131a22; color:white; padding-bottom:5%">
        <div class="flex">
            <!--Zero Columns-->
            <div class="zero" style="flex: 2; margin: 1% 5% 0 5%">
                <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                <img src="image\logo123.png" width="20%" alt="image_logo_website" />
                <p style="font-size:13px">EmySell is the lastest website for whom who are looking for the place to start their business. We provided the solution to help our potential custumers to achive the greatest outcome for their first start</p>
            </div>
            <!--First Columns-->
            <div class="first" style="flex: 1;font-size:10px;">
                <h2>Contact us</h2>
                <h3><i class="fa fa-envelope"></i> Email: cinemax@gmail.com</h3>
                <h3><i class="fa fa-phone" aria-hidden="true" style='font-size:15px'></i> Phone: 09737283823</h3>
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Ho Chi Minh City</h3>
            </div>
            <!--Second Columns-->
            <div class="second" style="flex: 1; font-size:10px;">
                <h2>Members List</h2>
                <h3>La Tran Hai Dang - s3836605</h3>
                <h3>Huynh Van Anh - s3836320</h3>
                <h3>Pham Gia Nguyen - s3819521</h3>
                <h3>Ngo My Quynh - S3836322</h3>
            </div>

            <!--Third Columns-->

            <div class="three" style="flex: 0.25">
                <!--Remember to add link Github-->
                <h3><a href="https://morioh.com/p/c479c01cf484" style="text-decoration: none"><i class="fa fa-github" aria-hidden="true" style='font-size:30px'></i></a></h3>
                <h3><i class="fa fa-facebook-official" aria-hidden="true" style='font-size:30px'></i></h3>
                <h3><i class="fa fa-twitter" aria-hidden="true" style='font-size:30px'></i></h3>
            </div>
        </div>

        <div class="footer_col">
              <a href="tos.php"><span>Terms of Service</span></a>
              <a href="privacypolicy.php"><span>Privacy Policy</span></a>
              <a>
                  <span>
                  <?php
if (!isset($_SESSION['cr']) && empty($_SESSION['cr'])) {
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
    <script type="text/javascript" src="productcategory_productdetail_productcreateTime/javascript.js"></script>
    <script type="text/javascript" src="register_validation.js"></script>

</body>
</html>


