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

        // If the admin does not change anything the variable will not be change
        if (isset($_POST['welcome_pp']) && !empty($_POST['welcome_pp'])){
            $_SESSION['welcome_pp'] = $_POST['welcome_pp'];
        }

        if (isset($_POST['consent']) && !empty($_POST['consent'])){
            $_SESSION['consent'] = $_POST['consent'];
        }

        if (isset($_POST['collect']) && !empty($_POST['collect'])){
            $_SESSION['collect'] = $_POST['collect'];
        }

        if (isset($_POST['info']) && !empty($_POST['info'])){
            $_SESSION['info'] = $_POST['info'];
        }

        if (isset($_POST['log']) && !empty($_POST['log'])){
            $_SESSION['log'] = $_POST['log'];
        }

        if (isset($_POST['beacons']) && !empty($_POST['beacons'])){
            $_SESSION['beacons'] = $_POST['beacons'];
        }

        if (isset($_POST['adv']) && !empty($_POST['adv'])){
            $_SESSION['adv'] = $_POST['adv'];
        }

        if (isset($_POST['party']) && !empty($_POST['party'])){
            $_SESSION['party'] = $_POST['party'];
        }

        if (isset($_POST['ccpa']) && !empty($_POST['ccpa'])){
            $_SESSION['ccpa'] = $_POST['ccpa'];
        }

        if (isset($_POST['gdpr']) && !empty($_POST['gdpr'])){
            $_SESSION['gdpr'] = $_POST['gdpr'];
        }

        if (isset($_POST['child']) && !empty($_POST['child'])){
            $_SESSION['child'] = $_POST['child'];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>EmySell's Admin</title>


        <link rel="stylesheet" href="index_product.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="button_custom.css">



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
                        <a href="browsebycate.php">Browse by categories</a>
                        <a href="browsebyname.php">Browse by name</a>
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
        <main style="padding:5%">
        <h1 style="width:100%; text-align:center;">Welcome to the Dashboard <?= $_SESSION['username'] ?></h1>
      
    
        <!--Edit Terms and Conditions -->
        <h2>Edit Privacy Policies</h2>
        <h4></h4>
        <form method="post">
            <h4>Edit for the opening</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['welcome_pp'])  && empty($_SESSION['welcome_pp'])){
                        $_SESSION['welcome_pp'] = '<p>At EmySell, accessible from https://dangtran862000.github.io/Emysell_website/index.html, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by EmySell and how we use it.</p>

                        <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
            
                        <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in EmySell. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.generateprivacypolicy.com/">Privacy Policy Generator</a>.</p>';
                        echo $_SESSION['welcome_pp'];
                    } else {
                        echo $_SESSION['welcome_pp'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="welcome_pp"/>
            <!--Edit the cookies part of the terms of service-->
            <h4>Edit the Consent's part</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['consent']) && empty($_SESSION['consent'])){
                        $_SESSION['consent'] = '<p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>';
                        echo $_SESSION['consent'];
                    } else {
                        echo $_SESSION['consent'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="consent"/>
            <!--Edit the Information we collect part of the pp-->
            <h4>Edit the Information we collect's part</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['collect']) && empty($_SESSION['collect'])){
                        $_SESSION['collect'] = '<p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
                        <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
                        <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p>';
                        echo $_SESSION['collect'];
                    } else {
                        echo $_SESSION['collect'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="collect"/>

            <!--Edit for How we use your information-->
            <h4>Edit for How we use your information</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['info']) && empty($_SESSION['info'])){
                        $_SESSION['info'] = '<p>We use the information we collect in various ways, including to:</p>

                        <ul>
                        <li>Provide, operate, and maintain our website</li>
                        <li>Improve, personalize, and expand our website</li>
                        <li>Understand and analyze how you use our website</li>
                        <li>Develop new products, services, features, and functionality</li>
                        <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
                        <li>Send you emails</li>
                        <li>Find and prevent fraud</li>
                        </ul>';
                        echo $_SESSION['info'];
                    } else {
                        echo $_SESSION['info'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="info"/>
            <!--Edit for Log Files-->
            <h4>Edit for Log Files</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['log']) && empty($_SESSION['log'])){
                        $_SESSION['log'] = ' <p>EmySell follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p>';
                        echo $_SESSION['log'];
                    } else {
                        echo $_SESSION['log'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="log">

            <!--Edit for Cookies and Web Beacons-->
            <h4>Edit for Cookies and Web Beacons</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['beacons']) && empty($_SESSION['beacons'])){
                        $_SESSION['beacons'] = '<p>Like any other website, EmySell uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>

                        <p>For more general information on cookies, please read <a href="https://www.privacypolicyonline.com/what-are-cookies/">"What Are Cookies" from Cookie Consent</a>.</p>';
                        echo $_SESSION['beacons'];
                    } else {
                        echo $_SESSION['beacons'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="beacons">

            <!--Edit Advertising Partners Privacy Policies-->
            <h4>Edit for Advertising Partners Privacy Policies</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['adv']) && empty($_SESSION['adv'])){
                        $_SESSION['adv'] = '<p>You may consult this list to find the Privacy Policy for each of the advertising partners of EmySell.</p>

                        <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on EmySell, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>
            
                        <p>Note that EmySell has no access to or control over these cookies that are used by third-party advertisers.</p>';
                        echo $_SESSION['adv'];
                    } else {
                        echo $_SESSION['adv'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="adv">

            <!--Edit for Third Party Privacy Policies-->
            <h4>Edit for Third Party Privacy Policies</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['party']) && empty($_SESSION['party'])){
                        $_SESSION['party'] = '<p>EmySell\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

                        <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites.</p>';
                        echo $_SESSION['party'];
                    } else {
                        echo $_SESSION['party'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="party">

            <!--Edit for CCPA Privacy Rights (Do Not Sell My Personal Information)-->
            <h4>Edit for CCPA Privacy Rights (Do Not Sell My Personal Information)</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['ccpa']) && empty($_SESSION['ccpa'])){
                        $_SESSION['ccpa'] = '<p>Under the CCPA, among other rights, California consumers have the right to:</p>
                        <p>Request that a business that collects a consumer\'s personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
                        <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
                        <p>Request that a business that sells a consumer\'s personal data, not sell the consumer\'s personal data.</p>
                        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
            ';
                        echo $_SESSION['ccpa'];
                    } else {
                        echo $_SESSION['ccpa'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="ccpa">

            <!--Edit for GDPR Data Protection Rights-->
            <h4>Edit for GDPR Data Protection Rights</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['gdpr']) && empty($_SESSION['gdpr'])){
                        $_SESSION['gdpr'] = '<p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
                        <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
                        <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
                        <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
                        <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
                        <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
                        <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
                        <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>
            ';
                        echo $_SESSION['gdpr'];
                    } else {
                        echo $_SESSION['gdpr'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="gdpr">

             <!--Edit for Children's Information-->
             <h4>Edit for Children's Information</h4>
            <p>
                <?php 
                    if (!isset($_SESSION['child']) && empty($_SESSION['child'])){
                        $_SESSION['child'] = '<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

                        <p>EmySell does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>';
                        echo $_SESSION['child'];
                    } else {
                        echo $_SESSION['child'] ?? "";
                    }
                    
                ?>
            </p>
            <input type="text" name="child">

            <button type="submit" name="submit" class="button_submit">Submit</button>  
        </form>
       
        </main>
       
    </body>

        <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
        <footer style="background-color: #131a22; color:white; padding-bottom:5%;">
        <div class="flex">
            <!--Zero Columns-->
            <div class="footer_column0" style="flex: 2; margin: 1% 5% 0 5%">
                <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                <img src="image\logo123.png" width="20%" alt="img_logo_website" />
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
            <div class="footer_column2" style="flex: 1; font-size:10px;">
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
            <a><span>© 2021, EmySell.com, Inc. or its affiliates</span></a>
        </div>

    </footer>

</html>