<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EmySell's Fees</title>
    <link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList was getting from Google Font-->
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
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <img src="image\logo123.png" class="img-fluid" alt="image_logo_website">
                </div>
            </a>

            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="fee.php">Fees</a>
            <a href="Myaccount/myaccount.html">My Account</a>
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
            <a id='signup' class="signup" href="./Myaccount/myaccount.php" style="padding:0;">
                <p class="button">Sign Up</p>
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>

    <img style="width:100%; height:auto" src="image\partner1.jpg" />

    <main class="main-fee" style="padding: 5%;">
        <!--Tables Section-->
        <section class="price" style="overflow-x:auto;">
            <h1 style="margin-left:0%;">Service Fees</h1>
            <hr class="hr_white" />
            <h2>Rate card for programme fees</h2>
            <div class="table">
                <table>
                    <tr style="background-color: #051433; color:white;">
                        <th>Type of Seller</th>
                        <th>Coins Cashback Fees</th>
                        <th>Free Shipping Special Fees</th>

                    </tr>
                    <tr>
                        <td>Electronic Mall Seller</td>
                        <td>3% (capped at $20)</td>
                        <td>0%</td>

                    </tr>
                    <tr>
                        <td>Electronic Martketplace Sellers</td>
                        <td>5% (capped at 30%)</td>
                        <td>2% (0% if join Cashback or Mall)</td>

                    </tr>
                    <tr>
                        <td>Non-electronic Mall Sellers</td>
                        <td>3%</td>
                        <td>0%</td>

                    </tr>
                    <tr>
                        <td>Non-electronic Marketplace Sellers</td>
                        <td>5%</td>
                        <td>2% (0% if join Cashback or Mall)</td>
                    </tr>
                </table>
            </div>

            <br />
            <br />
            <!--Shipping methods-->
            <h1 style="margin-left:0%;">Shipping methods</h1>
            <hr class="hr_white" />
            <!--J&T Express-->
            <h2>J&T Express</h2>
            <div class="table">
                <table>
                    <tr style="background-color: #051433; color:white;">
                        <th>Size of Procal</th>
                        <th>Weight Limit</th>
                        <th>Shipping Fee Paid By Buyers</th>
                        <th>Shipping Fee Paid By Sellers</th>

                    </tr>
                    <tr>
                        <td>S</td>
                        <td>Below 5kg</td>
                        <td>$1.49</td>
                        <td>$1.41</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>Between 5-10kg</td>
                        <td>$1.49</td>
                        <td>$3.51</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>Between 10-20kg</td>
                        <td>$1.49</td>
                        <td>$6.10</td>
                    </tr>
                    <tr>
                        <td>XL</td>
                        <td>Between 20-30kg</td>
                        <td>$1.49</td>
                        <td>$13.41</td>
                    </tr>
                </table>
            </div>


            <!--Ninja van-->
            <h2>Ninja Van (Home delivery)</h2>
            <div class="table">
                <table>
                    <tr style="background-color: #051433; color:white;">
                        <th>Size of Procal</th>
                        <th>Dimension Limit</th>
                        <th>Weight Limit</th>
                        <th>Shipping Fee Paid By Buyers</th>
                        <th>Shipping Fee Paid By Sellers</th>

                    </tr>
                    <tr>
                        <td>S</td>
                        <td>0 - 80cm</td>
                        <td>Below 5kg</td>
                        <td>$1.49</td>
                        <td>$2.51</td>
                    </tr>
                    <tr>
                        <td>M</td>
                        <td>81 -120cm</td>
                        <td>Between 5-10kg</td>
                        <td>$1.49</td>
                        <td>$4.01</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>120 - 200cm</td>
                        <td>Between 10-20kg</td>
                        <td>$1.49</td>
                        <td>$7.51</td>
                    </tr>
                    <tr>
                        <td>XL</td>
                        <td>201 - 300cm</td>
                        <td>Between 20-30kg</td>
                        <td>$1.49</td>
                        <td>$14.41</td>
                    </tr>
                </table>
            </div>

        </section>
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
                    <img src="image\logo123.png" width="20%" alt="image_logo_website"/>
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
    <script type="text/javascript" src="Myaccount/myaccount.js"></script>


</body>
</html>
