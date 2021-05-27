<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>EmySell</title>
        <link rel="stylesheet" href="browsebycate.css">
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
<main style="padding-top: 5%;">
    <div class="side-bar">
        <h2>Shop Categories</h2> <br>
        <!--PUT DROP DOWN HERE-->

        <div class="drop-down">
            <div class="select">
              <form class="test" action="browsebycate.php" method="post">
                <select class="select" name="list" style="content: '\25BC';" onchange="this.form.submit();">
                  <option disabled selected><p>Choose the categories!</p></option>
                  <option value="Department stores">Department stores</option>
                  <option value="Grocery stores">Grocery stores</option>
                  <option value="Restaurants">Restaurants</option>
                  <option value="Clothing stores">Clothing stores</option>
                  <option value="Accessory stores">Accessory stores</option>
                  <option value="Pharmacies">Pharmacies</option>
                  <option value="Technology stores">Technology stores</option>
                  <option value="Pet stores">Pet stores</option>
                  <option value="Toy stores">Toy stores</option>
                  <option value="Specialty stores">Specialty stores</option>
                  <option value="Thrift stores">Thrift stores</option>
                  <option value="Services">Services</option>
                  <option value="Kiosks">Kiosks</option>
                </select>
              </form>
            </div>
        </div>
    </div>
    <section class="shop-container">
        <h1>Browse Shop By Category</h1>
        <div class="shop-list">
          <?php
          $file1 = fopen("categories.csv","r");
          $categories = [];

          // while(! feof($file1)){
          //   $categories[] = fgetcsv($file1);
          // }
          while (($result = fgetcsv($file1)) !== false) {
            if (array(null) !== $result) { // ignore blank lines
                $categories[] = $result;
            }
          }

          $file2 = fopen("stores.csv","r");
          $stores = [];

          while (($result = fgetcsv($file2)) !== false) {
            if (array(null) !== $result) { // ignore blank lines
                $stores[] = $result;
            }
          }

          if('POST' == $_SERVER['REQUEST_METHOD'] ){
            foreach ($_POST as $key1 => $value1) {
              for ($i=1; $i < count($categories); $i++) {
                if($categories[$i][1] == $value1){
                  for ($j = 1; $j < count($stores); $j++) {
                    if($stores[$j][2] == $categories[$i][0]){
                      $temp = $stores[$j][1];
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
            }
          } else {
            for ($i=1; $i < count($stores); $i++) {
              $temp = $stores[$i][1];
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


          fclose($file1);
          fclose($file2);
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
        <footer style=" background-color: #131a22; color:white; padding-bottom:5%;">
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

    <!-- Element that contains the client's contact email, phone and address details
            (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->

    </body>

    </html>
