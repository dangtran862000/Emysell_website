<?php
    session_start();
?>

<html>
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
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="image\logo123.png" class="img-fluid" alt="img_logo_website">
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

        <main style="padding:5%;">
            <h1>Privacy Policy for EmySell</h1>

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
            <!-- <p>At EmySell, accessible from https://dangtran862000.github.io/Emysell_website/index.html, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by EmySell and how we use it.</p>

            <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

            <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in EmySell. This policy is not applicable to any information collected offline or via channels other than this website. Our Privacy Policy was created with the help of the <a href="https://www.generateprivacypolicy.com/">Privacy Policy Generator</a>.</p> -->

            <h3>Consent</h3>

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

            <!-- <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p> -->

            <h3>Information we collect</h3>
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
<!-- 
            <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.</p>
            <p>If you contact us directly, we may receive additional information about you such as your name, email address, phone number, the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
            <p>When you register for an Account, we may ask for your contact information, including items such as name, company name, address, email address, and telephone number.</p> -->

            <h3>How we use your information</h3>

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

            <!-- <p>We use the information we collect in various ways, including to:</p>

            <ul>
            <li>Provide, operate, and maintain our website</li>
            <li>Improve, personalize, and expand our website</li>
            <li>Understand and analyze how you use our website</li>
            <li>Develop new products, services, features, and functionality</li>
            <li>Communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the website, and for marketing and promotional purposes</li>
            <li>Send you emails</li>
            <li>Find and prevent fraud</li>
            </ul>-->

            <h3>Log Files</h3>

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

            <!-- <p>EmySell follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering demographic information.</p> -->

            <h3>Cookies and Web Beacons</h3>

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

            <!-- <p>Like any other website, EmySell uses 'cookies'. These cookies are used to store information including visitors' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.</p>

            <p>For more general information on cookies, please read <a href="https://www.privacypolicyonline.com/what-are-cookies/">"What Are Cookies" from Cookie Consent</a>.</p>
 -->


            <h3>Advertising Partners Privacy Policies</h3>

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

            <!-- <p>You may consult this list to find the Privacy Policy for each of the advertising partners of EmySell.</p>

            <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on EmySell, which are sent directly to users' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>

            <p>Note that EmySell has no access to or control over these cookies that are used by third-party advertisers.</p> -->

            <h3>Third Party Privacy Policies</h3>

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

            <!-- <p>EmySell's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. </p>

            <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p> -->

            <h3>CCPA Privacy Rights (Do Not Sell My Personal Information)</h3>

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

            <!-- <p>Under the CCPA, among other rights, California consumers have the right to:</p>
            <p>Request that a business that collects a consumer's personal data disclose the categories and specific pieces of personal data that a business has collected about consumers.</p>
            <p>Request that a business delete any personal data about the consumer that a business has collected.</p>
            <p>Request that a business that sells a consumer's personal data, not sell the consumer's personal data.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p> -->

            <h3>GDPR Data Protection Rights</h3>

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

            <!-- <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
            <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
            <p>The right to erasure – You have the right to request that we erase your personal data, under certain conditions.</p>
            <p>The right to restrict processing – You have the right to request that we restrict the processing of your personal data, under certain conditions.</p>
            <p>The right to object to processing – You have the right to object to our processing of your personal data, under certain conditions.</p>
            <p>The right to data portability – You have the right to request that we transfer the data that we have collected to another organization, or directly to you, under certain conditions.</p>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p> -->

            <h3>Children's Information</h3>

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
            <!-- <p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>

            <p>EmySell does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p> -->

        </main>

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

        
    </body>


</html>
