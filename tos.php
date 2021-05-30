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
            <a href=".\login\myaccount.php">My Account</a>
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

        <main style="padding:5%;">
            <h2><strong>Terms and Conditions</strong></h2>

            <p>Welcome to EmySell!</p>

            <p>
                <?php
                // If the variable is not be set and it was empty, echo the default 
                    if (!isset($_SESSION['welcome_tos'])  && empty($_SESSION['welcome_tos'])){
                        $_SESSION['welcome_tos'] = 'These terms and conditions outline the rules and regulations for the use of EmySell\'s Website, located at https://dangtran862000.github.io/Emysell_website/index.html.<br>
                            By accessing this website we assume you accept these terms and conditions. Do not continue to use EmySell if you do not agree to take all of the terms and conditions stated on this page.<br>
                            The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions. "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.';
                        echo $_SESSION['welcome_tos'];
                    } else {
                        echo $_SESSION['welcome_tos'];
                    }
                    // echo  $_SESSION['welcome_tos'];
                ?>
            </p>

            <h3><strong>Cookies</strong></h3>

            <p>
                <?php 
                // If the variable is not be set and it was empty, echo the default
                    if (!isset($_SESSION['cookies'])  && empty($_SESSION['welcome_tos'])){
                        $_SESSION['cookies'] = 'We employ the use of cookies. By accessing EmySell, you agreed to use cookies in agreement with the EmySell\'s Privacy Policy.<br><br>
                        Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.<br>';
                        echo $_SESSION['cookies'];
                    } else {
                    
                        echo $_SESSION['cookies'];
                    }
                    // echo  $_SESSION['welcome_tos'];
                ?>
            </p>


            <h3><strong>License</strong></h3>
            <?php 
                   // If the variable is not be set and it was empty, echo the default
                    if (!isset($_SESSION['license'])  && empty($_SESSION['license'])){
                        $_SESSION['license'] = '<p>Unless otherwise stated, EmySell and/or its licensors own the intellectual property rights for all material on EmySell. All intellectual property rights are reserved. You may access this from EmySell for your own personal use subjected to restrictions set in these terms and conditions.</p>

                        <p>You must not:</p>
                        <ul>
                            <li>Republish material from EmySell</li>
                            <li>Sell, rent or sub-license material from EmySell</li>
                            <li>Reproduce, duplicate or copy material from EmySell</li>
                            <li>Redistribute content from EmySell</li>
                        </ul>
                
                        <p>This Agreement shall begin on the date hereof. Our Terms and Conditions were created with the help of the <a href="https://www.termsandconditionsgenerator.com">Terms And Conditions Generator</a> and the <a href="https://www.generateprivacypolicy.com">Privacy Policy Generator</a>.</p>
                
                        <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. EmySell does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of EmySell,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, EmySell shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>
                
                        <p>EmySell reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>
                
                        <p>You warrant and represent that:</p>
                
                        <ul>
                            <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>
                            <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>
                            <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>
                            <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>
                        </ul>
                
                        <p>You hereby grant EmySell a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>
                    ';
                        echo $_SESSION['license'];
                    } else {
                        
                        echo $_SESSION['license'];
                    }
                    // echo  $_SESSION['welcome_tos'];
                ?>

            
            <h3><strong>Hyperlinking to our Content</strong></h3>
            <p>
                    <?php
                    // If the variable is not be set and it was empty, echo the default 
                        if (!isset($_SESSION['hyper']) && empty($_SESSION['hyper'])){
                            $_SESSION['hyper'] = '<p>The following organizations may link to our Website without prior written approval:</p>

                            <ul>
                                <li>Government agencies;</li>
                                <li>Search engines;</li>
                                <li>News organizations;</li>
                                <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>
                                <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>
                            </ul>
                    
                            <p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>
                    
                            <p>We may consider and approve other link requests from the following types of organizations:</p>
                    
                            <ul>
                                <li>commonly-known consumer and/or business information sources;</li>
                                <li>dot.com community sites;</li>
                                <li>associations or other groups representing charities;</li>
                                <li>online directory distributors;</li>
                                <li>internet portals;</li>
                                <li>accounting, law and consulting firms; and</li>
                                <li>educational institutions and trade associations.</li>
                            </ul>
                    
                            <p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of EmySell; and (d) the link is in the context of general resource information.</p>
                    
                            <p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>
                    
                            <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to EmySell. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>
                    
                            <p>Approved organizations may hyperlink to our Website as follows:</p>
                    
                            <ul>
                                <li>By use of our corporate name; or</li>
                                <li>By use of the uniform resource locator being linked to; or</li>
                                <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>
                            </ul>
                    
                            <p>No use of EmySell\'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>
                    ';
                            echo $_SESSION['hyper'];
                        } else {
                            echo $_SESSION['hyper'] ?? "";
                        }
                        
                    ?>
                </p>


           
            <h3><strong>iFrames</strong></h3>
            <?php 
            // If the variable is not be set and it was empty, echo the default
                if (!isset($_SESSION['iframe'])  && empty($_SESSION['iframe'])){
                    $_SESSION['iframe'] = 'Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.';
                    echo $_SESSION['iframe'];
                } else {
                    echo $_SESSION['iframe'];
                }
            ?>


           
            <h3><strong>Content Liability</strong></h3>
            <?php
            // If the variable is not be set and it was empty, echo the default
                if (!isset($_SESSION['liability'])  && empty($_SESSION['liability'])){
                    $_SESSION['liability'] = 'We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.';
                    echo  $_SESSION['liability'];
                } else {
                    echo  $_SESSION['liability'];
                } 
                
            ?>

           
            <h3><strong>Your Privacy</strong></h3>
            <?php 
            // If the variable is not be set and it was empty, echo the default
                if (!isset($_SESSION['privacy'])  && empty($_SESSION['privacy'])){
                    $_SESSION['privacy'] = 'Please read Privacy Policy';
                    echo  $_SESSION['privacy'];
                } else {
                    echo  $_SESSION['privacy'];
                } 
            ?>

           
            <h3><strong>Reservation of Rights</strong></h3>
            <?php 
            // If the variable is not be set and it was empty, echo the default
                if (!isset($_SESSION['right'])  && empty($_SESSION['right'])){
                    $_SESSION['right'] = 'We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.';
                    echo  $_SESSION['right'];
                } else {
                    echo  $_SESSION['right'];
                } 
            ?>

           
            <h3><strong>Removal of links from our website</strong></h3>

            <?php
            // If the variable is not be set and it was empty, echo the default
            if (!isset($_SESSION['remove'])  && empty($_SESSION['remove'])){
                $_SESSION['remove'] =  '<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

                <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>';
                echo  $_SESSION['remove'];
            } else {
                echo  $_SESSION['remove'];
            }  

            ?>


          
            <h3><strong>Disclaimer</strong></h3>

            <?php 
            // If the variable is not be set and it was empty, echo the default
            if (!isset($_SESSION['disclaim'])  && empty($_SESSION['disclaim'])){
                $_SESSION['disclaim'] = '<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>

                <ul>
                    <li>limit or exclude our or your liability for death or personal injury;</li>
                    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>
                    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>
                    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>
                </ul>

                <p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>

                <p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>
                ';
                echo  $_SESSION['disclaim'];
            } else {
                echo  $_SESSION['disclaim'];
            } 
            ?>

           
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
            <a><span>
            <?php 
            // If the variable is not be set and it was empty, echo the default
                 if (!isset($_SESSION['cr'])  && empty($_SESSION['cr'])){
                    $_SESSION['cr'] = '© 2021, EmySell.com, Inc. or its affiliates';
                
                        echo $_SESSION['cr'];
                    } else {
                
                        echo $_SESSION['cr'];
                }
                ?>
            </span></a>
        </div>

    </footer>
    </body>
</html>