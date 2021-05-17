<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        // check cookie
        if (isset($_COOKIE['loggedin_name'])) {
        $_SESSION['username'] = $_COOKIE['loggedin_name'];
        } else {
        header('location: login_admin.php');
        }
    }

    if(isset($_REQUEST['submit'])){
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['mobile'] = $_POST['mobile'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>EmySell's Admin</title>


        <link rel="stylesheet" href="index_product.css">
        <link rel="stylesheet" href="carousel.css">
        <link rel="stylesheet" href="header.css">



        <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">

        <!--FontList was getting from the Google Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!--Header Area-->
        <header>
            <!--Navigation area-->
            <nav class="navbar" id="myTopnav">
                <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
                <a class="navbar-brand" href="index.html">
                    <div class="logo-image">
                        <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                        <img src="image\logo123.png" class="img-fluid" alt="img_logo_website">
                    </div>
                </a>

                <a href="index.html">Home</a>
                <a href="aboutus.html">About us</a>
                <a href="fee.html">Fees</a>
                <a href="Myaccount/myaccount.html">My Account</a>
                <div class="dropdown">
                    <button class="dropbtn">
                        Browse
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="browsebycate.html">Browse by categories</a>
                        <a href="browsebyname.html">Browse by name</a>
                    </div>
                </div>
                <a href="faq.html">FAQS</a>
                <a href="contact.html">Contact</a>
                <a id='signup' class="signup" href="./Myaccount/myaccount.html" style="padding:0;">
                    <p class="button">Sign Up</p>
                </a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


            </nav>
        </header>
        <h1>Welcome to the Dashboard <?= $_SESSION['username'] ?></h1>
        <form action="" method="post">
            <input type="text" name="name">
            <input type="text" name="email">
            <input type="text" name="mobile">
            <button type="submit" name="submit">Submit</button>
        </form>
        <h1><?php echo $_SESSION['name'];?></h1>
        <h3><?php echo $_SESSION['email'];?></h3>
        <h1><?php echo $_SESSION['mobile'];?></h1>
    </body>
</html>