<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
    <link rel="stylesheet" href="./shop-page.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/product_category.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/cookies.css">
</head>
<?php
// $rows = 0;
// $cells = 0;
// $fp = fopen("products.csv","r");
// $flag = true;
// while(($content = fgetcsv($fp, 1000, “,”)) !== FALSE){
//     if($flag) { $flag = false; continue; }
//     print_r($content[1]);
//     echo '' . "<br />\n";
//     $rows++;
//     $cells += count($content);
// }
// fclose($fp);

// echo "Total rows = $rows, total cells = $cells";

$product = array();
$count_line = 0;
$count = 0;
if (($handle = fopen('products.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        $count++;
        if ($count == 1) { continue; }
        
        if ($data[4] == 22 and $data[6] == "TRUE") {
            // print_r($data[0]);
            // print_r($data[1]);
            // print_r($data[3]);
            // print_r($data[4]);
            // echo '' . "<br />\n"; // Array
            $count_line++;
            $product[] = $data[1];
        }
    
        
    }
    $product = array_unique($product);

    // print_r($product)."<br />\n";
    // echo $count_line;
    fclose($handle);
?>

<body onload="check();">
    <header>
        <nav>
          <div class="logo">
            <img class="img" src="./images/hm-logo-png.png" alt="">
          </div>


          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>

          <ul class="main-nav">
            <li><a href="shop-page.php">Home</a></li>
            <li><a href="aboutus-shop.html">About us</a></li>
            <li><div class="dropdown">
              <button class="dropbtn">Product</button>
              <div class="dropdown-content">
              <a href="../productcategory_productdetail_productcreateTime/product_category.html">Browse by category</a>
              <a href="../productcategory_productdetail_productcreateTime/product_createTime.html">Browse by created time</a>
              </div>
            </div></li>
            <li><a href="./contact_shop.html">Contact</a></li>
          </ul>
        </nav>
        <div class="hero">
          <h1>Welcome to H&M</h1>
          <p>Your style is our inspire</p>
        </div>
      </header>
     <main>
        <section class='block-product'>
          <div class="product-section">
            <h3>New Products</h3>
            <?php 
            for ($i = 0; $i < count($product); $i++) {
              echo "<div class='product'>
              <div class='upper'>
              <div class='two-third'>
                  <h3><a ' href='../productcategory_productdetail_productcreateTime/product_detail.html'></a></h3>
                  <a href='../productcategory_productdetail_productcreateTime/product_detail.html'><img src='../productcategory_productdetail_productcreateTime/store/t-shirt-1.png' alt=''></a>
                </div>
              </div>
              <div class='lower'>
                <p class='price'>$product[$i]</p>
                <p class='date'>9/4/2021</p>
                <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
                <div class='btn'>
                  <a href='../productcategory_productdetail_productcreateTime/product_detail.html' class='btn-1'>VIEW DETAIL</a>
                </div>
              </div>
            </div>";
          }
      
      }
            ?>
          <!-- <div class="product">
            <div class="upper">
                <div class="one-third"></div>
            <div class='two-third'>
                <h3><a href="../productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 1</a></h3>
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html"><img src="../productcategory_productdetail_productcreateTime/store/t-shirt-1.png" alt=""></a>
              </div>
            </div>
            <div class="lower">
              <p class='price'>₫ 250.000</p>
              <p class='date'>9/4/2021</p>
              <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
              <div class="btn">
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
              </div>
            </div>
          </div>
          <div class="product">
            <div class="upper">
                <div class="one-third"></div>
            <div class='two-third'>
                <h3><a href="../productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 1</a></h3>
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html"><img src="../productcategory_productdetail_productcreateTime/store/t-shirt-2.png" alt=""></a>
              </div>
            </div>
            <div class="lower">
              <p class='price'>₫ 250.000</p>
              <p class='date'>9/4/2021</p>
              <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
              <div class="btn">
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
              </div>
            </div>
          </div>

          <div class="product">
            <div class="upper">
                <div class="one-third"></div>
            <div class='two-third'>
                <h3><a href="../productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 1</a></h3>
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html"><img src="../productcategory_productdetail_productcreateTime/store/t-shirt-3.png" alt=""></a>
              </div>
            </div>
            <div class="lower">
              <p class='price'>₫ 250.000</p>
              <p class='date'>9/4/2021</p>
              <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
              <div class="btn">
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
              </div>
            </div>
          </div>



        </div>
        <div class="product-section">
            <h3>Featured Products</h3>

          <div class="product">
            <div class="upper">
                <div class="one-third"></div>
            <div class='two-third'>
                <h3><a href="../productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 1</a></h3>
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html"><img src="../productcategory_productdetail_productcreateTime/store/t-shirt-1.png" alt=""></a>
              </div>
            </div>
            <div class="lower">
              <p class='price'>₫ 250.000</p>
              <p class='date'>9/4/2021</p>
              <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
              <div class="btn">
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
              </div>
            </div>
          </div>

             <div class="product">
            <div class="upper">
                <div class="one-third"></div>
            <div class='two-third'>
                <h3><a href="../productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 1</a></h3>
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html"><img src="../productcategory_productdetail_productcreateTime/store/t-shirt-1.png" alt=""></a>
              </div>
            </div>
            <div class="lower">
              <p class='price'>₫ 250.000</p>
              <p class='date'>9/4/2021</p>
              <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
              <div class="btn">
                <a href="../productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
              </div>
            </div>
          </div> -->


          </section>
        </div>
      </main>

      <div id="cookies">
        <h3>I use cookies</h3>
        <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
        <button type="button" name="button" onclick="agree();">I understand</button>
        <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
      </div>


      <div class="btn">
          <a href="test.php" class='btn-1'>TEST</a>
      </div>


      <footer>
          <div class="footer--left">
              <div class="footer-logo">
                 <div class="logo"> <img class="img" src="./images/hm-logo-png.png" alt="H&M logo"></div>
              </div>
              <p>© Copyright 2021. All rights reserved</p>
              <p>Term of Service</p>
              <p>Privacy Policy</p>
          </div>
          <div class="footer--right">
              <ul class="footer-nav">
                  <li><a href="shop-page.php">Home</a></li>
                  <li><a href="aboutus-shop.html">About us</a></li>
                  <li><a href="../productcategory_productdetail_productcreateTime/product_category.html">Product</a></li>
                  <li><a href="contact_shop.html">Contact</a></li>
              </ul>
          </div>
      </footer>
      <script type="text/javascript" src="../productcategory_productdetail_productcreateTime/javascript.js"></script>
</body>
</html>
