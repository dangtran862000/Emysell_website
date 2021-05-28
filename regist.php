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
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="image\logo123.png" class="img-fluid" alt="img_logo_website">
                </div>
            </a>

            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="fee.php">Fees</a>
            <a href="./login/myaccount.php">My Account</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Browse
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="browsebycate.php">Browse by categories</a>
                    <a href="browsebyname.php">Browse by name</a>
                </div>
            </div>
            <a href="faq.php">FAQS</a>
            <a href="contact.php">Contact</a>
            <a id='signup' class="signup" href="./login/myaccount.php" style="padding:0;">
                <p class="button">Sign Up</p>
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>


    <div class="register-page" style="margin-top:0; padding-top:5%">
        <div class="form">
            <h1><b>Register</b></h1>
            <form class="register-form" name="form" onsubmit="return validated()" method="post">
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

                <p class="message">Already registered? <a href="../Myaccount/myaccount.php">Sign In</a></p>
            </form>
        </div>
    </div>

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

    <!--Check validation-->
<!--    <script>
        var email = document.forms['form']['email'];
        var fname = document.forms['form']['fname'];
        var lname = document.forms['form']['lname'];
        var phone = document.forms['form']['phone'];
        var address = document.forms['form']['address'];
        var city = document.forms['form']['city'];
        var zipcode = document.forms['form']['zipcode'];
        var password = document.forms['form']['password'];
        var repassword = document.forms['form']['repassword'];
        var country = document.getElementById('s_adult');
        var castore = document.getElementById('s_adult1');
        var business_name = document.forms['form']['business_name'];
        var store_name = document.forms['form']['store_name'];


        // Error mess
        var email_error = document.getElementById('email_error');
        var fname_error = document.getElementById('fname-error');
        var lname_error = document.getElementById('lname-error');
        var phone_error = document.getElementById('phone_error');
        var address_error = document.getElementById('address_error');
        var city_error = document.getElementById('city_error');
        var zipcode_error = document.getElementById('zipcode_error');
        var password_error = document.getElementById('password_error');
        var repassword_error = document.getElementById('repassword_error');
        var country_error = document.getElementById('country_error');
        var castore_error = document.getElementById('castore_error');
        var business_error = document.getElementById('business_error');
        var store_error = document.getElementById('store_error');


        email.addEventListener('textInput', verfiedEmail);
        fname.addEventListener('textInput', verfiedFname);
        lname.addEventListener('textInput', verfiedLname);
        phone.addEventListener('textInput', verifiedPhone);
        address.addEventListener('textInput', verifiedAddress);
        city.addEventListener('textInput', verifiedCity);
        zipcode.addEventListener('textInput', verifiedZipcode);
        password.addEventListener('textInput', verifiedPassword);
        repassword.addEventListener('textInput', verifiedRepassword);
        business_name.addEventListener('textInput', verifiedBusinessName);
        store_name.addEventListener('textInput', verifiedStoreName);

        function validated() {

            //email.addEventListener('textInput', verfiedEmail);
            //fname.addEventListener('textInput', verfiedFname);
            //lname.addEventListener('textInput', verfiedFName);

            var isValid = true;
            // Check validation of firstname
            if ((fname.value.length <= 3) || (!validateName(fname.value))) {
                fname.style.border = "1px solid red";
                fname_error.style.display = "block";
                fname.focus();
                isValid = false;

            }
            // Check validation of last name
            if ((lname.value.length <= 3) || (!validateName(lname.value))) {
                lname.style.border = "1px solid red";
                lname_error.style.display = "block";
                lname.focus();
                isValid = false;
            }

            // Check validation of email
            if (!validateEmail(email.value)) {
                email.style.border = "1px solid red";
                email_error.style.display = "block";
                email.focus();
                isValid = false;
            }

            // Check validation of phone
            if ((phone.value.length < 9) || (phone.value.length > 11) || (!validatePhone(phone.value))) {
                phone.style.border = "1px solid red";
                phone_error.style.display = "block";
                phone.focus();
                isValid = false;
            }

            // Check validation of address
            if ((address.value.length < 3) || (!validateName(address.value))) {
                address.style.border = "1px solid red";
                address_error.style.display = "block";
                address.focus();
                isValid = false;
            }

            // Check validation of city
            if (city.value.length < 3 || (!validateName(city.value))) {
                city.style.border = "1px solid red";
                city_error.style.display = "block";
                city.focus();
                isValid = false;
            }

            // Check validation of zipcode
            if (!validateZipcode(zipcode.value)) {
                zipcode.style.border = "1px solid red";
                zipcode_error.style.display = "block";
                zipcode.focus();
                isValid = false;
            }

            // Check validation of password
            if (!validatePassword(password.value)) {
                password.style.border = "1px solid red";
                password_error.style.display = "block";
                password.focus();
                isValid = false;
            }

            // Check validation of repassword
            if (repassword.value != password.value) {
                repassword.style.border = "1px solid red";
                repassword_error.style.display = "block";
                repassword.focus();
                isValid = false;
            }

            // Check validation of country
            if (country.value == "") {
                country_error.style.display = "block";
                country.focus();
                isValid = false;
            }


            // Check validation of country
            if (country.value != "") {
                country_error.style.display = "none";
            }

            // Check validation of categories
            if (castore.value == "" && (document.getElementById('storeowner').style.display != 'none')) {
                castore_error.style.display = "block";
                castore.focus();
                isValid = false;
            }


            // Check validation of country
            if (castore.value != "" && (document.getElementById('storeowner').style.display != 'none')) {
                castore_error.style.display = "none";
            }

            // Check validation of business
            if (((business_name.value.length < 3) || (!validateName(business_name.value))) && (document.getElementById('storeowner').style.display != 'none')) {
                business_name.style.border = "1px solid red";
                business_error.style.display = "block";
                business_name.focus();
                isValid = false;
            }

            // Check validation of store
            if (((store_name.value.length < 3) || (!validateName(store_name.value))) && (document.getElementById('storeowner').style.display != 'none')) {
                store_name.style.border = "1px solid red";
                store_error.style.display = "block";
                store_name.focus();
                isValid = false;
            }

            /*if (email.value.length > 3) {
                email.addEventListener('textInput', verfiedEmail);
            }*/

            return isValid;

        }

        function verfiedEmail() {
            if (email.value.length >= 8) {
                email.style.border = "1px solid silver";
                email_error.style.display = "none";
                return true;

            }
        }

        function verfiedFname() {
            if (fname.value.length >= 3) {
                fname.style.border = "1px solid silver";
                fname_error.style.display = "none";
                return true;

            }
        }

        function verfiedLname() {
            if (lname.value.length >= 3) {
                lname.style.border = "1px solid silver";
                lname_error.style.display = "none";
                return true;

            }
        }

        function verifiedPhone() {
            if (phone.value.length >= 3) {
                phone.style.border = "1px solid silver";
                phone_error.style.display = "none";
                return true;

            }
        }

        function verifiedAddress() {
            if (address.value.length >= 3) {
                address.style.border = "1px solid silver";
                address_error.style.display = "none";
                return true;

            }
        }

        function verifiedCity() {
            if (city.value.length >= 3) {
                city.style.border = "1px solid silver";
                city_error.style.display = "none";
                return true;

            }
        }

        function verifiedZipcode() {
            if (zipcode.value.length >= 4 && zipcode.value.length <= 6) {
                zipcode.style.border = "1px solid silver";
                zipcode_error.style.display = "none";
                return true;
            }
        }

        function verifiedPassword() {
            if (password.value.length >= 3) {
                password.style.border = "1px solid silver";
                password_error.style.display = "none";
                return true;

            }
        }

        function verifiedRepassword() {
            if (repassword.value == password.value) {
                repassword.style.border = "1px solid silver";
                repassword_error.style.display = "none";
                return true;

            }
        }


        function verifiedBusinessName() {
            if (business_name.value.length >= 3) {
                business_name.style.border = "1px solid silver";
                business_error.style.display = "none";
                return true;

            }
        }

        function verifiedStoreName() {
            if (store_name.value.length >= 3) {
                store_name.style.border = "1px solid silver";
                store_error.style.display = "none";
                return true;

            }
        }

        // Regex using
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validateName(name) {
            const re = /[a-zA-Z]+/;
            return re.test(name);
        }

        function validatePhone(phone) {
            const re = /^(\d+[-.\s]?)+\d+$/;
            return re.test(phone);
        }

        function validateZipcode(zipcode) {
            const re = /^\d{4,6}$/;
            return re.test(zipcode);
        }

        function validatePassword(password) {
            const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/;
            return re.test(password);
        }

        // Check if the customer choose which radio button
        function checkRadio() {
            if (document.getElementById('store').checked) {
                document.getElementById('storeowner').style.display = 'block';
            }
            else document.getElementById('storeowner').style.display = 'none';
        }

        function yesnoCheck() {
            if (document.getElementById('yesCheck').checked) {
                document.getElementById('storeowner').style.display = 'block';
            }
            else document.getElementById('storeowner').style.display = 'none';

        }

    </script>-->



    <script type="text/javascript" src="productcategory_productdetail_productcreateTime/javascript.js"></script>
    <script type="text/javascript" src="register_validation.js"></script>

</body>
</html>
