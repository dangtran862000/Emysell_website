<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>EmySell</title>
        <link rel="stylesheet" href="browsebyname.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">
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

<main>
    <div class="side-bar">
        <h2>Shop Names</h2> <br>
        <!--PUT DROP DOWN HERE-->
        <div class="menu">
            <div id="wrapper">
               <div class="scrollbar" id="style-3">
                   <div class="navside">

                     <form class="" action="browsebyname.php" method="post">
                       <li><a href="#"> <button type="submit" name="A" value='find'>A</button> </a></li>
                       <li><a href="#"> <button type="submit" name="B" value='find'>B</button> </a></li>
                       <li><a href="#"> <button type="submit" name="C" value='find'>C</button> </a></li>
                       <li><a href="#"> <button type="submit" name="D" value='find'>D</button> </a></li>
                       <li><a href="#"> <button type="submit" name="E" value='find'>E</button> </a></li>
                       <li><a href="#"> <button type="submit" name="F" value='find'>F</button> </a></li>
                       <li><a href="#"> <button type="submit" name="G" value='find'>G</button> </a></li>
                       <li><a href="#"> <button type="submit" name="H" value='find'>H</button> </a></li>
                       <li><a href="#"> <button type="submit" name="I" value='find'>I</button> </a></li>
                       <li><a href="#"> <button type="submit" name="J" value='find'>J</button> </a></li>
                       <li><a href="#"> <button type="submit" name="K" value='find'>K</button> </a></li>
                       <li><a href="#"> <button type="submit" name="L" value='find'>L</button> </a></li>
                       <li><a href="#"> <button type="submit" name="M" value='find'>M</button> </a></li>
                       <li><a href="#"> <button type="submit" name="N" value='find'>N</button> </a></li>
                       <li><a href="#"> <button type="submit" name="O" value='find'>O</button> </a></li>
                       <li><a href="#"> <button type="submit" name="P" value='find'>P</button> </a></li>
                       <li><a href="#"> <button type="submit" name="Q" value='find'>Q</button> </a></li>
                       <li><a href="#"> <button type="submit" name="R" value='find'>R</button> </a></li>
                       <li><a href="#"> <button type="submit" name="S" value='find'>S</button> </a></li>
                       <li><a href="#"> <button type="submit" name="T" value='find'>T</button> </a></li>
                       <li><a href="#"> <button type="submit" name="U" value='find'>U</button> </a></li>
                       <li><a href="#"> <button type="submit" name="V" value='find'>V</button> </a></li>
                       <li><a href="#"> <button type="submit" name="W" value='find'>W</button> </a></li>
                       <li><a href="#"> <button type="submit" name="X" value='find'>X</button> </a></li>
                       <li><a href="#"> <button type="submit" name="Y" value='find'>Y</button> </a></li>
                       <li><a href="#"> <button type="submit" name="Z" value='find'>Z</button> </a></li>
                     </form>

                   </div>
                   <div class="force-overflow"></div>
               </div>
           </div>
       </div>
    </div>
    <section class="shop-container">
        <h1>Browse Shop By Name</h1>
        <div class="shop-list">
            <?php
            $file = fopen("stores.csv","r");
            $data = [];

            while (($result = fgetcsv($file)) !== false) {
              if (array(null) !== $result) { // ignore blank lines
                  $data[] = $result;
              }
            }


            if('POST' != $_SERVER['REQUEST_METHOD'] ){
              for ($i=1; $i < count($data); $i++) {
                $temp = $data[$i][1];
                echo "<div class='shop-item'>
                    <div class='shop-item__image'>
                        <a href='./shoppage_shopcontact_shopaboutus/shop-page.php'>
                        <img class='shop-img' src='./shoppage_shopcontact_shopaboutus/images/logo5.jpeg' alt='shop-img'>
                        </a>
                        <a href='./shoppage_shopcontact_shopaboutus/shop-page.php' class='shop-item__btn'>Visit Shop</a>
                    </div>
                    <h3 class='shop-item__name'><a href='./shoppage_shopcontact_shopaboutus/shop-page.php'>$temp</a></h3>
                </div>";
              }
            } else {
              foreach($_POST as $key=>$value) {
                $pattern = "#^$key#";
                for ($i=1; $i < count($data); $i++) {
                  $temp = $data[$i][1];
                  if(preg_match($pattern, $temp)){
                    echo "<div class='shop-item'>
                        <div class='shop-item__image'>
                            <a href='./shoppage_shopcontact_shopaboutus/shop-page.php'>
                            <img class='shop-img' src='./shoppage_shopcontact_shopaboutus/images/logo5.jpeg' alt='shop-img'>
                            </a>
                            <a href='./shoppage_shopcontact_shopaboutus/shop-page.php' class='shop-item__btn'>Visit Shop</a>
                        </div>
                        <h3 class='shop-item__name'><a href='./shoppage_shopcontact_shopaboutus/shop-page.php'>$temp</a></h3>
                    </div>";
                  }
                }
              }
            }

            fclose($file);
        ?>
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

    <!-- Element that contains the client's contact email, phone and address details
            (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->

    </body>

    </html>
