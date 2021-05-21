<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Product by Create Time</title>
    <link rel="stylesheet" href="product_createTime.css">
    <link rel="stylesheet" href="../shoppage_shopcontact_shopaboutus/shop-page.css">
    <link rel="stylesheet" href="cookies.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <script type="text/javascript">

   function changeFunc() {

    var selectBox = document.getElementById("selectBox");
    var selectedValue = selectBox.options[selectBox.selectedIndex].value;
    if (selectedValue == 1) {
      document.getElementById('myDIV1').style.display = "none";
      document.getElementById('myDIV2').style.display = "block";
    } else if (selectedValue == 2){
      document.getElementById('myDIV2').style.display = "none";
      document.getElementById('myDIV1').style.display = "block";
      
    } else {
      document.getElementById('myDIV2').style.display = "none";
      document.getElementById('myDIV1').style.display = "none";
    };
   
   }

  </script>
  <?php 
  
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
        
        $from = ($page - 1 ) * 2;

        // print_r($count_product);
        // echo '' . "<br />\n";
        // print_r($pageNumber);

        // for ($i = $from; $i < $from + $productInPage; $i++) {
        //   print_r($category[$i][1]);
        //   echo ' ';
        //   print_r($category[$i][2]);
        //   echo '' . "<br />\n";
        // }

        
    $new_product_des = [];
    $new_product_ase = [];
    
    
    for ($i = 0; $i < count( $category); $i++) {
        
        $new_product_des[] = $category[$i][3];
        $new_product_ase[] = $category[$i][3];
    
    }
    
    rsort($new_product_des);
    sort($new_product_ase);

  
  ?>
  <body onload="check();">

    <header>
      <nav>
        <div class="logo">
          <img class="img" src="../shoppage_shopcontact_shopaboutus/images/hm-logo-png.png" alt="logo of shop">
        </div>


        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>

        <ul class="main-nav">
          <li><a href="../shoppage_shopcontact_shopaboutus/shop-page.php">Home</a></li>
          <li><a href="../shoppage_shopcontact_shopaboutus/aboutus-shop.html">About us</a></li>
          <li><div class="dropdown">
            <button class="dropbtn">Product</button>
            <div class="dropdown-content">
            <a href="../productcategory_productdetail_productcreateTime/product_category.html">Browse by category</a>
            <a href="../productcategory_productdetail_productcreateTime/product_createTime.php?page=1">Browse by created time</a>
            </div>
          </div></li>
          <li><a href="../shoppage_shopcontact_shopaboutus/contact_shop.html">Contact</a></li>
        </ul>
      </nav>
      <div class="hero">
        <h1>Welcome to <?echo $store_name ?></h1>
        <p>Your style is our inspire</p>
      </div>
    </header>



    <main class='n-main'>
      

      <section class='block-product'>
      <section>
        <div class="select">
          <!-- <select class="" name="">
            <option value="" onchange="myFunctionVisiblity()">Newest First</option>
            <option value="">Olderst First</option>
          </select> -->
          <select id="selectBox" onchange="changeFunc();">
              <option value="1">Oldest First</option>
              <option value="2">Newest First</option>
          </select>
        </div>
      </section>
      <section id="myDIV1" style="display:none">
            <?php 
            for ($i = 0; $i < 1; $i++) {
              $timeProduct_des = $new_product_des[$i];
              for ($j = 0; $j < 17; $j++){
                  if ($timeProduct_des == $category[$j][3]){
                      $name_product_time_des = $category[$j][1];
                      $price_product_time_des = $category[$j][2];
                      $product_date_time_des = $category[$j][3];
                      echo " <div class='product'>
                              <div class='upper'>
                                <div class='two-third'>
                                  <h3><a href='product_detail.html'></a></h3>
                                  <a href='product_detail.html'><img src='store/$name_product_time_des.png' alt=''></a>
                                </div>
                                <div class='one-third'></div>
                              </div>
                              <div class='lower'>
                                <p class='price'>$name_product_time_des</p>
                                <p style='margin-left: 40%; margin-bottom: 0;'>$price_product_time_des USD</p>
                                <p class='description'>$product_date_time_des</p>
                                <div class='btn'>
                                  <a href='product_detail.html' class='btn-1'>VIEW DETAIL</a>
                                </div>
                              </div>
                            </div> ";
                  }
              }
            }
            ?>
      </section>
      <section id="myDIV2">
            <?php 
            
            for ($i = 0; $i < 1; $i++) {
              $timeProduct_ase = $new_product_ase[$i];
              for ($j = 0; $j < 17; $j++){
                  if ($timeProduct_ase == $category[$j][3]){
                      $name_product_time_ase = $category[$j][1];
                      $price_product_time_ase = $category[$j][2];
                      $product_date_time_ase = $category[$j][3];
                      echo " <div class='product'>
                              <div class='upper'>
                                <div class='two-third'>
                                  <h3><a href='product_detail.html'></a></h3>
                                  <a href='product_detail.html'><img src='store/$name_product_time_ase.png' alt=''></a>
                                </div>
                                <div class='one-third'></div>
                              </div>
                              <div class='lower'>
                                <p class='price'>$name_product_time_ase</p>
                                <p style='margin-left: 40%; margin-bottom: 0;'>$price_product_time_ase USD</p>
                                <p class='description'>$product_date_time_ase</p>
                                <div class='btn'>
                                  <a href='product_detail.html' class='btn-1'>VIEW DETAIL</a>
                                </div>
                              </div>
                            </div> ";
                  }
              }
          }
            ?>
      </section>
      <div class="product-section">
            <h3>Products</h3>
      </div>
        <?php 
        
        for ($i = $from; $i < $from + $productInPage; $i++) {
          $product_name = $category[$i][1];
          $product_picture = str_replace("'","",$category[$i][1]);
          $product_name_price = $category[$i][2];
          $product_date = $category[$i][3];
          if ($product_name !== null) {
      
              echo " <div class='product' id='product_php'>
                  <div class='upper'>
                    <div class='two-third'>
                      <h3><a href='product_detail.html'></a></h3>
                      <a href='product_detail.html'><img src='store/$product_picture.png' alt=''></a>
                    </div>
                    <div class='one-third'></div>
                  </div>
                  <div class='lower'>
                    <p class='price'>$product_name</p>
                    <p style='margin-left: 40%; margin-bottom: 0;'>$product_name_price USD</p>
                    <p class='description'>$product_date</p>
                    <div class='btn'>
                      <a href='product_detail.html' class='btn-1'>VIEW DETAIL</a>
                    </div>
                  </div>
                </div> ";
            }
            
          }
  
        
        for ($i = 0; $i < count($category); $i++) {
          // print_r($category[$i][1]);
          $count_product = $count_product + 1;
        }
        $pageNumber = ceil($count_product / $productInPage);
        
        
        if ($page <= 1) {
          $previous_page = 1;
        } else {
          $previous_page = $page - 1;
        }
        if ($page >= $pageNumber) {
          $next_page = $pageNumber;
        } else {
          $next_page = $page + 1;
        }
        echo '' . "<br />\n";
        echo '' . "<br />\n";
        echo '' . "<br />\n";

        echo "<a href='product_createTime.php?page=$previous_page#product_php' class='button_pagination' style='margin-right:2%;'>Previous </a>";
        for ($t = 1; $t <= $pageNumber; $t++) {
          if ($t == $pageNumber) {
            if ($page == $t) {
              echo "<a href='product_createTime.php?page=$t#product_php' class='button_pagination_number_active' style='text-decoration: none;'> $t </a>";
            } else {
              echo "<a href='product_createTime.php?page=$t#product_php' class='button_pagination_number' style='text-decoration: none;'> $t </a>";
            }
          } else {
            if ($page == $t) {
              echo "<a href='product_createTime.php?page=$t#product_php' class='button_pagination_number_active' style='text-decoration: none;'> $t </a>  ";
            } else {
              echo "<a href='product_createTime.php?page=$t#product_php' class='button_pagination_number' style='text-decoration: none;'> $t </a>  ";
            }
            
          }
        }
        echo "<a href='product_createTime.php?page=$next_page#product_php' class='button_pagination' style='margin-left:2%;'> Next </a>";
        
        ?>

        <!-- <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">T-shirt 1</a></h3>
              <a href="product_detail.html"><img src="store/t-shirt-1.png" alt=""></a>
            </div>
            <div class="one-third"></div>
          </div>
          <div class="lower">
            <p class='price'>₫ 250.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
            <div class="btn">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">T-shirt 2</a></h3>
              <a href="product_detail.html"><img src="store/t-shirt-2.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 250.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>T-shirt in stretch cotton jersey with short sleeves. Muscle fit-designed to showcase the body’s natural physique.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">T-shirt 3</a></h3>
              <a href="product_detail.html"><img src="store/t-shirt-3.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 250.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>T-shirt in premium cotton jersey.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">T-shirt 4</a></h3>
              <a href="product_detail.html"><img src="store/t-shirt-4.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 250.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>T-shirt in soft cotton jersey with a printed graphic design and crew neck.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">T-shirt 5</a></h3>
              <a href="product_detail.html"><img src="store/t-shirt-5.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 250.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>T-shirt in cotton jersey with a print motif.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Long-Sleeved shirt 1</a></h3>
              <a href="product_detail.html"><img src="store/long-sleeved-1.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 270.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Long top in soft cotton jersey with ribbing around the neckline. Straight, relaxed fit with long sleeves and a curved hem.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Long-Sleeved shirt 2</a></h3>
              <a href="product_detail.html"><img src="store/long-sleeved-2.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 270.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Long, straight-cut shirt in soft cotton jersey. Long sleeves, ribbing at neckline, and rounded hem. Relaxed fit.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Long-Sleeved shirt 3</a></h3>
              <a href="product_detail.html"><img src="store/long-sleeved-3.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 270.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Straight-cut, oversized, and relaxed fit with a crew neck, dropped shoulders, and ribbing at neck and cuffs.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Long-Sleeved shirt 4</a></h3>
              <a href="product_detail.html"><img src="store/long-sleeved-4.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 270.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Striped, straight-cut shirt in thick cotton jersey. Long sleeves.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Resort shirt 1</a></h3>
              <a href="product_detail.html"><img src="store/resort-shirt-1.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 260.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Short-sleeved shirt in woven viscose fabric with a printed pattern. Resort collar, buttons without placket, and straight-cut hem.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Resort shirt 2</a></h3>
              <a href="product_detail.html"><img src="store/resort-shirt-2.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 260.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Straight-cut, short-sleeved shirt in a woven cotton and viscose blend. Resort collar, buttons without placket, and yoke at back.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Resort shirt 3</a></h3>
              <a href="product_detail.html"><img src="store/resort-shirt-3.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 260.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Short-sleeved shirt in a patterned viscose weave with a resort collar, French front and straight-cut hem.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Resort shirt 4</a></h3>
              <a href="product_detail.html"><img src="store/resort-shirt-4.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 260.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Short-sleeved shirt in a patterned viscose weave with a resort collar, French front and straight-cut hem.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Trouser 1</a></h3>
              <a href="product_detail.html"><img src="store/trouser-1.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 280.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Pants in a cool, woven linen and cotton blend. Regular waist with elasticized waistband, concealed drawstring, and zip fly with button. </p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Trouser 2</a></h3>
              <a href="product_detail.html"><img src="store/trouser-2.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 280.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Suit trousers in a stretch cotton weave with a concealed hook-and-eye fastener, zip fly, side pockets, jetted back pockets and legs with creases. </p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">Trouser 3</a></h3>
              <a href="product_detail.html"><img src="store/trouser-3.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 280.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>5-pocket trousers in washed, slightly stretchy twill with a regular waist, zip fly and skinny legs. Skinny fit.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Trouser 4</a></h3>
              <a href="product_detail.html"><img src="store/trouser-4.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 280.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Ankle-length suit trousers in woven fabric with a zip fly, hook-and-eye fastener and concealed button</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Hoodie 1</a></h3>
              <a href="product_detail.html"><img src="store/hoodie-1.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 240.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Long-sleeved sweatshirt with a jersey-lined drawstring hood, kangaroo pocket, and ribbing at cuffs and hem. Soft, brushed inside.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">Hoodie 2</a></h3>
              <a href="product_detail.html"><img src="store/hoodie-2.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 240.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Long-sleeved hoodie in soft sweatshirt fabric with a kangaroo pocket, double-layered drawstring hood</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third-2'>
              <h3><a href="product_detail.html">Hoodie 3</a></h3>
              <a href="product_detail.html"><img src="store/hoodie-3.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 240.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Relaxed-fit sweatshirt with a printed pattern and a text motif. </p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div>

        <div class="product">
          <div class="upper">
            <div class='two-third'>
              <h3><a href="product_detail.html">Hoodie 4</a></h3>
              <a href="product_detail.html"><img src="store/hoodie-4.png" alt=""></a>
            </div>
            <div class="one-thrid">
            </div>
          </div>
          <div class="lower">
            <p class='price'>₫ 240.000</p>
            <p class='date'>9/4/2021</p>
            <p class='description'>Soft sweatshirt with a printed design. Wrap-front drawstring hood, long sleeves, and ribbing at cuffs and hem.</p>
            <div class="test">
              <a href="product_detail.html" class='btn-1'>VIEW DETAIL</a>
            </div>
          </div>
        </div> -->

      </section>
    </main>

    <div id="cookies">
      <h3>I use cookies</h3>
      <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
      <button type="button" name="button" onclick="agree();">I understand</button>
      <a href="#">Learn more</a>
    </div>


    <footer>
      <div class="footer--left">
          <div class="footer-logo">
             <div class="logo"> <img class="img" src="../shoppage_shopcontact_shopaboutus/images/hm-logo-png.png" alt="H&M logo"></div>
          </div>
          <p>© Copyright 2021. All rights reserved</p>
          <p>Term of Service</p>
          <p>Privacy Policy</p>
      </div>
      <div class="footer--right">
          <ul class="footer-nav">
              <li><a href="../shoppage_shopcontact_shopaboutus/shop-page.php">Home</a></li>
              <li><a href="../shoppage_shopcontact_shopaboutus/aboutus-shop.html">About us</a></li>
              <li><a href="../productcategory_productdetail_productcreateTime/product_category.html">Product</a></li>
              <li><a href="../shoppage_shopcontact_shopaboutus/contact_shop.html">Contact</a></li>
          </ul>
      </div>
  </footer>


    <script type="text/javascript" src="javascript.js"></script>
  </body>
</html>
