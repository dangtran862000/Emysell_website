<?php
  session_start();
  
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title></title>

      <link rel="stylesheet" href="product_detail.css">
      <link rel="stylesheet" href="../StyleSheet1.css">
      <link rel="stylesheet" href="cookies.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <title>Product Detail</title>
      <!--FontList-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

  <?php
  $product_id = $_GET["product_id"];
  $page = $_GET["product"];
  $product_name = str_replace("_","'",$page);
  
  $time = array();
  $items = array();
  $store = array();
  $product = array();
  $product_price = array();
  $count_line = 0;
  $count = 0;
  $count_store = 0;

    
  if (($handle = fopen('products.csv', 'r')) !== FALSE) { // Check the resource is valid
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
          $count++;
          $product_price[] = $data;
          if ($count == 1) { continue; }
          $items[] = $data;
          $time[] = $data;
          if ($data[4] == 22 and $data[6] == "TRUE") {
              $count_line++;
              $product[] = $data[1];
              $store[] = $data[4];
              $product_price[] = $data[2];
          }
        
          
      }
  }
  
  if (($storecsv = fopen('stores.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($store_data = fgetcsv($storecsv, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        $count_store++;
        if ($count == 1) { continue; }
        if ($store_data[0] == $store[0]) {
          $store_name = $store_data[1];
      }
    }
  }

      $page = $_GET["page"];
      $productInPage = 2;
      $count_product = 0;
      $category = [];
      $max_prob = 0;
      for ($row = 0; $row < 1000; $row++) {
          if ($time[$row][4] == 22) {
              $category[] = $time[$row];
          }
      }
  
  
  ?>


   <body onload="check(); HiddenSignup();">

     <!--Header Area-->
     <header>
        <!--Navigation area-->
        <nav class="navbar" id="myTopnav">
            <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="..\image\logo123.png" class="img-fluid" alt="img_logo_website">
                </div>
            </a>

            <a href="..\index.php">Home</a>
            <a href="..\aboutus.php">About us</a>
            <a href="..\fee.php">Fees</a>
            <a href="../login/myaccount.php">My Account</a>
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
            <a id='signup' class="signup" href="../login/myaccount.php" style="padding:0;">
                <p class="button">Sign Up</p>
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            <div class="cart">
                <a href="../productcategory_productdetail_productcreateTime/cart.php?product=<?php echo $product_name?>&product_id=<?php echo $product_id?>" style="float: right;">
                    <ion-icon name="basket"></ion-icon>Cart <span><?php
                    if (count( $_SESSION['current_product']) == null) {
                      echo 0;
                    } else {
                      $count = count( $_SESSION['current_product']);
                    echo $count;
                    }
                    ?></span>
                </a>
            </div>

        </nav>
    </header>

     <!--Banner-->
     <div>
         <!--Source image: https://i.pinimg.com/originals/05/8c/a5/058ca55eae5b86fa8a4d52c1d1e5a4a4.jpg-->
         <img src="../image/banner1.jpg" class="banner" alt="image_banner_homepage"/>
     </div>



     <main>
       <section class='section-1' >
         <div class="product-detail">

           <div class="left">
             <div class="arrow in-right"></div>
             <div class="arrow in-left"></div>

             <div class="slides">
               <a href="" class="slider"></a>
               <a href="" class="slider"></a>
               <a href="" class="slider"></a>
             </div>

             

           <?php 
              $product_id = $_GET["product_id"];
              $page = $_GET["product"];
              $product_name = str_replace("_","'",$page);
              $quantity = 0;
              for ($i = 0; $i < count($category); $i++) {
                if ($category[$i][1] == $product_name and $category[$i][0] == $product_id){
                  $product_price = $category[$i][2];
                  echo "
               <div class='slide-image'>
              <div id='img-1'>
                <img class='show-img-product' src='./store/$page.png'>
              </div>
             </div>

             <div class='logo'><img src='kisspng-king-of-prussia-grafton-centre-h-m-retail-logo-m-5abe84c8b4b1e8.4654672615224352727401.png'></div>
            </div>
               <div class='right'>
               <div class='title-sale'>
                 <div class='left-title'>
                 <h1 class='title'>$product_name</h1>
                 </div>
                 <img src='sale-tag.png' alt=''>
               </div>
  
  
               <div class='price-star'>
                 <span class='price'>$product_price USD</span>
                 <span class='stars'>★★★★★</span>
               </div>
  
               <h3>Description</h3>
               <div class='description'>
                 T-shirt in stretch cotton jersey with short sleeves. Muscle fit-designed to showcase the body’s natural physique.
               </div>
  
               <h3>Color</h3>
               <div class='block-colors'>
                 <span class='color'></span>
                 <span class='color selected'></span>
                 <span class='color'></span>
               </div>
  
               <h3>Size</h3>
               <div class='block-sizes'>
                 <span class='size'>S</span>
                 <span class='size'>M</span>
                 <span class='size selected'>L</span>
                 <span class='size'>XL</span>
               </div>
               
               <form method='post' action='product_detail.php?product=$page&product_id=$product_id'>   
               <div class='btn-1' style='display: float-left;'>
                <input type='submit' name='cart' class='add-cart cart1 purchase' value='ADD TO CART'>
                <a class='add-cart cart1' href='../productcategory_productdetail_productcreateTime/cart.php?product=$page&product_id=$product_id'><div class='purchase'>BUY NOW</div></a>
                </div>
                </form> 
              
               
               
               
                </div>";
                }
                
              }
              
            ?>
           

           </div>
         </div>
       </section>
        
        <?php

            

            if (isset($_POST['clear'])) {
              session_destroy();
              header("Refresh:0");
            }

            if (isset( $_POST['cart'])) {
              $quantity ++;
              $current_product = [
                'name' =>  $product_name,
                'duration' =>   $product_price,
                'quantity' =>   $quantity,
              ];
              $_SESSION['current_product'][] = $current_product;
              // $_SESSION['current_product'] =  array_unique($_SESSION['current_product']);
              header("Refresh:0");
            }
              
        ?>
       <div class="clear"></div>



       <section class='section-2'>
         <div class="recommend-title">
           <h2>Recomend Product</h2>
         </div>

         <!-- Recommendation section -->
         <div class="block-recommend-product">
             <div class="recommend-product">
               <img class='recommend-image' src="store/t-shirt-1.png" alt="">
               <div class="bar"></div>
               <div class="title">Black T-shirt</div>
             </div>

             <a href="product_category.html">
              <div class="recommend-product">
               <img class='recommend-image' src="store/short-1.png" alt="">
               <div class="bar"></div>
               <div class="title">Black short</div>
              </div>
             </a>

             <div class="recommend-product">
               <img class='recommend-image' src="store/trouser-2.png" alt="">
               <div class="bar"></div>
               <div class="title">Caramel trouser</div>
             </div>

             <div class="recommend-product">
               <img class='recommend-image' src="store/hoodie-1.png" alt="">
               <div class="bar"></div>
               <div class="title">Binz hoodie</div>
             </div>
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
              <img src="..\image\logo123.png" width="20%" alt="img_logo_website"/>
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
  <script type="text/javascript" src="javascript.js"></script>
  <!-- <script type="text/javascript" src="cart.js"></script> -->
  <script type="text/javascript" src="../Myaccount/myaccount.js"></script>
   </body>
</html>
