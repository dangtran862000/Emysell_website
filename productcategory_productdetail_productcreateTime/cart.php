<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="cookies.css">
      <!--FontList-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../OrderPlacement_thankyoupage/OrderPlacement_thankyou.css">
    <title>Order Placement Cart</title>
</head>

<?php
            $page = $_GET["product"];
            $product_id = $_GET["product_id"];
            if (isset($_POST['clear'])) {
              session_destroy();
              header("Refresh:0");
            }

            if (isset( $_POST['cart'])) {
              $current_product = [
                'name' =>  $product_name,
                'duration' =>   $product_price,
              ];
              $_SESSION['current_product'][] = $current_product;
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
            <a href="..\Myaccount/myaccount.php">My Account</a>
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
            <a id='signup' class="signup" href="./Myaccount/myaccount.php" style="padding:0;">
                <p class="button">Sign Up</p>
            </a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>

    <div class="shoppingcart_container">
        <h1>SHOPPING CART</h1>
    </div>


    <div class="container-products">
        <div class="product-header">
            <h5 class="product-title" style="padding-left:13%;">PRODUCT</h5>
            <h5 class="price sm-hide">PRICE</h5>
            <h5 class="quantity" style="padding-left:3%;">QUANTITY</h5>
            <h5 class="total">TOTAL</h5>
        </div>
        <div class="products">
            <?php

        $total_price = 0;
        if (isset($_SESSION['current_product'])) {
            if($_SESSION['current_product'] != null){
                for ($i = 0; $i < count($_SESSION['current_product']); $i++){
                    $product_name = $_SESSION['current_product'][$i]['name'];
                    $duration_Value = $_SESSION['current_product'][$i]['duration'];
                    $quantity = $_SESSION['current_product'][$i]['quantity'];
                    $product_name_pic = str_replace("'","_",$product_name);
                   
                    
                    if (isset( $_POST['Check'])) {
                        
                        $quantity = $_POST['quantity'];
                        
                        
                    }
                    $total = $duration_Value * $quantity;
                    echo "
                            <div class='product'>
                            <img src='./store/$product_name_pic.png' />
                            <span class='sm-hide item-name-long'>$product_name</span>
                            
                        </div>
                        
                        <div class='price sm-hide'>$duration_Value USD</div>
                        <div class='quantity'>
                            <?php ?>
                            <form style='width:30%' action='cart.php?product=$product_name&product_id=$product_id' method='post' >
                            <input type='number' style='width:100%;' placeholder=$quantity value=$quantity id='changeQuantity' name='quantity' min=1></input>
                            <input type='submit' style='width:100%;' value='Check' name='Check'></input>
                            </form>
                             
                        </div>
                        <div class='total'>$total USD</div>
                            ";
                            $total_price = $total_price +  $total;
                        $_SESSION['current_product'][$i]['quantity'] = $quantity;
                    }
                    
                    } 
            }
            
            // if (isset($_SESSION['current_product'])) {
            
            //     $product_name = $_SESSION['current_product']['name'];
            //     echo $product_name;
            //     echo "
            //     <div class='product'><ion-icon name='close-circle'></ion-icon><img src='./store/${item.tag}.jpg' />
            //        <span class='sm-hide item-name-long'>$product_name</span>
                  
            //    </div>
              
            //    <div class='price sm-hide'>${item.price} VND</div>
            //    <div class='quantity'>
            //        <ion-icon class='decrease ' name='arrow-dropleft-circle'></ion-icon>
            //        <form style='width:30%'><input type='number' style='width:100%;' placeholder=${item.inCart} value=${item.inCart} id='changeQuantity' class='iinputQuantity'><span></span></input></form>
            //        <ion-icon class='increase' name='arrow-dropright-circle'></ion-icon>   
            //    </div>
            //    <div class='total'>${item.inCart * item.price} VND</div>`;
            //     ";
            //     print_r($_SESSION['current_product']['name']);
                
            //   }
            ?>
        </div>
        <form action="cart.php?product=<?php echo $product_name?>&product_id=<?php echo $product_id?>" method="post" style="display: float-right; margin-top: 5%">
        <input type="submit" value="CLEAR CART" name="clear" id="clear">
        </form>
    </div>
    
    <section class="container_cart" style="padding-bottom: 10%;">
        <a href="./product_detail.php?product=<?php echo $page ?>&product_id=<?php echo $product_id?>">
            <button type="button" class="button_style_order">CONTINUE SHOPPING</button>
        </a>
        <form action="..\shoppage_shopcontact_shopaboutus\shop-page.php" method="post">
        <input type="submit" value="BACK TO THE HOME SHOP" name="clear" id="clear" class="button_style_order">
        </form>
        <div class="row">
          <div class="column">
            <h1 style="padding-bottom: 5%;">CUSTOMER INFORMATION</h1>
            <hr style="margin-bottom: 5%; background-color:black; border-color: black;">
            <h3 style="padding-top: 1%;"> Dinh Thi Khanh Linh</h3>
            <div style="padding-top: 5%;">
            <i class="material-icons" style="float: left;">&#xe8b4;</i>
            <p style="padding-left: 10%;"> 702 Nguyen Van Linh, Tan Phong Ward, District 7, Ho Chi Minh City</p>
            </div>
            <div style="padding-top: 5%;">
              <i class="material-icons" style="float: left;">&#xe0cd;</i>
              <p style="padding-left: 10%;">0933716099</p>
            </div>
            <div style="padding-top: 5%;">
              <i class="material-icons" style="float: left;">&#xe0be;</i>
              <p style="padding-left: 10%;">dinhthi.khanhlinh@gmail.com</p>
            </div>
          </div>
          <div class="column" id='cart_total'>
            <h1 style="padding-bottom: 5%;">CART TOTAL</h1>
            <hr style=" background-color:black; border-color: black;">
            <div class="cart_total">
            <form action='cart.php?product=<?php echo $product_name?>&product_id=<?php echo $product_id ?>#cart_total' method='post' style="margin-bottom: 10%">
            <input type="text" id="coupon_code" name="coupon" placeholder="Coupon code" style="height:40px; width:40%; margin-top: 10%;">
            <input type="submit" name="name" value="Apply coupon" class="button_style_apply" style="height:40px; width:40%">
            </form>
            <table id="customers_total">
                <tr >
                    <td style="width: 22%; text-align: center; background-color: white; padding-top: 5%; padding-bottom: 5%;">SUB-TOTAL</th>
                    <th style="width: 25%; text-align: center"><p id="sub_total"><?php echo $total_price ; ?> USD</p></th>
                </tr>
                <tr>
                    <td style="width: 22%; text-align: center; background-color: white; padding-top: 5%; padding-bottom: 5%;">TOTAL</th>
                    <th style="width: 25%; text-align: center"><?php 
            
            if (isset( $_POST['name'])) {
                $code = $_POST['coupon'];
                if($code == "COSC2430-HD") {
                    $final_total = $total_price - ($total_price*(20/100));
                    echo  $final_total ;
                } else if ($code == "COSC2430-DI") {
                    $final_total = $total_price - ($total_price*(10/100));
                    echo  $final_total ;
                } else if ($code != "COSC2430-HD" or $code != "COSC2430-DI"){
                    $message = " Incorrect!! Please input again the coupon code";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
            ?> USD</th>
                </tr>
            </table>
            </div>
            
            

            
            
            <!-- <a href="../OrderPlacement_thankyoupage/thankyou.php"> -->
            <button id="myP" type="button" class="button_style_order" onclick="orderButton()">ORDER</button>
            <!-- </a> -->
            </div>
        </div>
    </section>

</table>




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
                    <img src="../image/logo123.png" width="20%" alt="img_logo_website"/>
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
                    <h3><i class="fa fa-facebook-official" aria-hidden="true" style="font-size: 30px;"></i></h3>
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
    <script src="../Myaccount/myaccount.js"></script>
    <script src="cart.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>
