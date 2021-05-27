<?php
    session_start();
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="StyleSheet1.css">
<link rel="stylesheet" type="text/css" href="faq.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList adaptive by Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body onload="check(); HiddenSignup();">

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
            <a href="Myaccount/myaccount.php">My Account</a>
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

<div class="faq_container">
    <h1>FREQUENTLY ASKED QUESTION (FAQ)</h1>
    <i>Click on a question to expand, and reveal the answer</i>
</div>

<div style="padding-bottom: 5%; padding-top: 3%;">
<section class="faq-section">
    <input type="checkbox" id="q1" style="width:50%;">
    <label for="q1">How To Purchase / Order Using Emysell App</label>
    <p></p>
    <p> Step 1: Find the product you need to buy in one of the ways </p>
    <p> Step 2: Refer to and choose the right product </p>
    <p style="padding-left: 2%"> Some information to know when choosing a product: </p>
    <p style="padding-left: 2%"> Product image, name </p>
    <p style="padding-left: 2%"> Vendor Category (Regular Shop, Favorite Shop, Favorite Shop +) </p>
    <p style="padding-left: 2%"> Product price (original price / sale price) </p>
    <p style="padding-left: 2%"> Place of sale (province / city) </p>
    <p style="padding-left: 2%"> Product reviews </p>
    <p style="padding-left: 2%">  Number of products sold </p>
    <p style="padding-left: 2%"> Information about structure, features, warranty (if any) </p>
    <p> Step 3: Select the product </p>
    <p><i> * If you don't click Buy now, select the icon to go to the Shopping Cart to select the product. </i></p>
    <p> Step 4: Use coupon code </p>
    <p><i> * In case of buying a combo / gift, remember to choose the accompanying product </i></p>
    <p> Step 5: Check and pay </p>
    <p><i> * Review the shipping address, shipping unit, and payment method before pressing the ORDER button. </i></p>
  </section>

  <section class="faq-section">
    <input type="checkbox" id="q2" style="width:50%;">
    <label for="q2">Collection of Payment Methods On Emysell</label>
    <p></p>
    <p> Emysell supports the following payment methods:</p>
    <p> 1. AirPay Wallet Payment: applies to orders with a payment value less than or equal to the amount in your AirPay Wallet or an AirPay-linked bank account </p>
    <p> 2. Payment by domestic ATM card (Internet Banking): applicable to ATM cards registered for internet banking service and belonging to banks affiliated with Emysell </p>
    <p> 3. Payment by Credit / Debit Card: only applicable for 4 types of cards: Visa, Mastercard, JCB, American Express (Amex). Amex card line alone will not be able to pay for orders shipped from abroad </p>
    <p> 4 Payment by bank transfer: applicable for order with final payment value of VND 20 million or more, allowing Buyer to pay by domestic ATM card, credit / debit card or Direct transfer at the bank </p>
    <p> 5. Payment on delivery (COD): applicable for orders Users want to pay in cash </p>
    <p> Note: </p>
    <p> Emysell absolutely does not support transactions using other forms of payment not listed above or transactions outside Emysell, such as wire transfer or deposit, etc. Emysell will take action if detecting fraud or external transaction affecting the interests of Users on Emysell. </p>
    <p> For international products, Users have only 2 payment options: Payment on Delivery (COD) and Payment by Credit / Debit Card </p>
  </section>

  <section class="faq-section">
    <input type="checkbox" id="q3" style="width:50%;">
    <label for="q3">What is Emysell Guarantee?</label>
    <p></p>
    <p> Emysell Guarantee protects both Buyer and Seller by holding transaction amounts between Buyer and Seller until Buyer confirms they fully agree to the order without any request to Pay Goods / Refunds yet. </p>

<p> Buyers can request a return / refund if the item has not been received or the product is problematic within 7 days (if the order has Emysell Mall products) or 3 days (if the order has the product products that are not part of the Emysell Mall) </p>
  </section>

  <section class="faq-section">
    <input type="checkbox" id="q4" style="width:50%;">
    <label for="q4">Instructions for Checking Orders On Shopee</label>
    <p></p>
    <p> Waiting for confirmation: the order is in the stage of being validated by the system </p>
    <p> Waiting for goods: order has been communicated to Seller for delivery </p>
    <p> Delivering: the order is being shipped to Buyer </p>
    <p> Review: Orders are pending product review </p>
    <p> Delivered: the order has been successfully delivered to Buyer </p>
    <p> Canceled: the order has been successfully canceled </p>
    <p> Return: the order has been successfully returned </p>
  </section>

  <section class="faq-section">
    <input type="checkbox" id="q5" style="width:50%;">
    <label for="q5">Instructions To Cancel Your Order</label>
    <p></p>
    <p> Step 1: Go to Me -> select Waiting for confirmation or Waiting for goods -> Select the application to cancel </p>
    <p> Step 2: click Cancel order -> choose the reason to cancel the order -> click Cancel order again </p>
    <p> Note: </p>
    <p style="padding-left: 2%"> A buyer may cancel an order or withdraw a cancellation request only once per order </p>
    <p style="padding-left: 2%"> When the order is in Pending for Delivery (Seller is packing and preparing to deliver to the carrier), the request needs to be approved by Seller to ensure Seller's benefit:
    <p style="padding-left: 2%"> Accept cancellation request: Your order will be canceled immediately </p>
    <p style="padding-left: 2%"> Refusal of request to cancel: Order will be delivered to Buyer. In this case the buyer cannot cancel even if they contact Customer Service. </p>
  </section>

  <section class="faq-section">
    <input type="checkbox" id="q6" style="width:50%;">
    <label for="q6">Emysell Account Username</label>
    <p></p>
    <p> What is Shopee username? </p>
    <p> Username is your account name when registering for a Shopee account. </p>
    <p> Each account will have its own username and cannot match. When you get the error "The username you just used already exists. Please enter a different username", please choose a new username. </p>
    <p> Your username must be in the format of Shopee: lower case letters, no accents, no special characters, no spaces, no capital letters. </p>

    <p> * Tip: You can add numbers to your username to avoid duplication. </p>
  </section>
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
    <script type="text/javascript" src="Myaccount/myaccount.js"></script>
</body>
</html>
