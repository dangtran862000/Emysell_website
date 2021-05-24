<!DOCTYPE html>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <title>EmySell</title>


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
<body onload="check(); HiddenSignup();">

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

    <!--Banner-->
    <div>
        <!--Source image: https://i.pinimg.com/originals/05/8c/a5/058ca55eae5b86fa8a4d52c1d1e5a4a4.jpg-->
        <img src="image/banner1.jpg" class="banner" alt="image_banner_homepage" />
    </div>

    <div class="title-product">
        <h1>New Product</h1>
        <hr />
        <br />
    </div>
    <!--Creating slider for new product-->
    <script>

        // PHP Scripts
        <?php

        $product_img = "productcategory_productdetail_productcreateTime/store/t-shirt-1.png";
        $product_des = "T-shirt in premium cotton jersey.";

        $store_img = "shoppage_shopcontact_shopaboutus/images/hm-logo.jpg";
    
        // Create an array with order date time and should appear in the mall home
        function createArray($filename){
            $records = array();
            $fp = fopen($filename, "r");
            $headings = fgetcsv($fp);
            $j = 3;  
            if (count($headings) == 5 ){
                $i = 4;

            } else {
                $i = 5;
               
            } 

            while ($aLineOfCells = fgetcsv($fp)) {
                
                if ($aLineOfCells[$i] == "TRUE") {
                    // Format the date time
                    if ($i == 5){
                        $aLineOfCells[2] = "₫ " . $aLineOfCells[2];
                    }
                    $aLineOfCells[3] = date('d/m/Y',strtotime($aLineOfCells[3]));
                    $records[] = $aLineOfCells;
                }

               
            }
            fclose($fp);

            return $records;
        }

        function createArray123($filename){
            $records = array();
            $fp = fopen($filename, "r");
            $headings = fgetcsv($fp);

            if (count($headings) == 5 ){
                $i = 4;
            } else {
                $i = 5;  
            } 

            while ($aLineOfCells = fgetcsv($fp)) {
                
                $records[] = $aLineOfCells;
            }
            fclose($fp);
            //print_r($records);

            // // sort rows by datetime objects
            // usort($records, function ($a, $b) {
            //     if ($a[3] > $b[3]) {
            //         return -1;
            //     }
            //     if ($a[3] < $b[3]) {
            //         return 1;
            //     }
            //     return 0;
                
            // });
            return $records;
        }

        function sortByDate($records){
            // sort rows by datetime objects
            $result = $records;
            usort($result, function ($a, $b) {
                if (strtotime($a[3]) > strtotime($b[3])) {
                    return -1;
                }
                if (strtotime($a[3]) < strtotime($b[3])) {
                    return 1;
                }
                return 0;
                
            });
            return $result;
        }

 
        function js_str($s)
        {
            return '"' . addcslashes($s, "\0..\37\"\\") . '"';
        }

        function js_array($array)
        {
            $temp = array_map('js_str', $array);
            return '[' . implode(',', $temp) . ']';
        }

        $product_records = createArray("products.csv");
        $store_records = createArray("stores.csv");

        $store123_records = createArray123("stores.csv");

        // print_r($store_records);
        // echo "Hello world";

        // Get the length of product and store appear in Mall Home
        $product_records_len = count($product_records);
        $store_records_len = count($product_records);

        // print $product_records_len;
        // print $store_records_len;

        if ($product_records_len <= 10 ){
            // Product
            $new_products = sortByDate($product_records);
            $feature_products = $product_records;
            
        } else {
            // Product
            $new_products = array_slice(sortByDate($product_records), 0, 10);
            $feature_products = array_slice($product_records, 0, 10);
            
        }

        if ($store_records_len <= 10){
            // Store
            $new_stores = sortByDate($store_records);
            $feature_stores = $store_records;
        } else {
            // Store
            $new_stores = array_slice(sortByDate($store_records), 0, 10);
            $feature_stores = array_slice($store_records, 0, 10);
        }

        function addImgIntoArray($img, &$array){
            foreach ($array as &$item){

                array_unshift($item, $img);
                // print_r($item);
            }
        }


        // print "Hello World";
        // print_r($store123_records);


        function addBrandToArray($array_store, &$array_product){
            foreach ($array_product as &$product){
                // print_r($product[5]);
                // print $array_store[intval($product[5]) - 1][1];
                // print $product[5];
                // print intval($product[5]) - 1;

                // print  $array_store[intval($product[5]) - 1][1];
                // print_r($array_store[16]);
                // print  $array_store[intval($product[5]) - 1][1];
                $value = $array_store[intval($product[5]) - 1][1];
                // print $value;
                array_push($product, $value);
            }
        }

        function addDesToArray($des, &$array){
            foreach ($array as &$item){

                array_push($item, $des);
                // print_r($item);
            }
        }

        // Adding thing to product
        addImgIntoArray($product_img,$new_products);
        addImgIntoArray($product_img,$feature_products);
        

        addBrandToArray($store123_records,$new_products);
        addBrandToArray($store123_records,$feature_products);

        addDesToArray($product_des,$new_products);
        addDesToArray($product_des,$feature_products);

        // Adding thing stpre
        addImgIntoArray($store_img,$new_stores);
        addImgIntoArray($store_img,$feature_stores);


        // print_r($new_products);

        // const img_in = 0;
        // const brand = 8;
        // const item = 1;
        // const price = 3;
        // const date = 4;
        // const des = 5;


        $js_array_new_products = json_encode($new_products);
        echo "var js_array_new_products = ". $js_array_new_products . ";\n";

        $js_array_feature_products = json_encode($feature_products);
        echo "var js_array_feature_products = ". $js_array_feature_products . ";\n";

        $js_array_new_stores = json_encode($new_stores);
        echo "var js_array_new_stores = ". $js_array_new_stores . ";\n";

        $js_array_feature_stores = json_encode($feature_stores);
        echo "var js_array_feature_stores = ". $js_array_feature_stores . ";\n";

        // echo "document.write(js_array_feature_stores);"

    ?>  

        // we put the two lots of text and the image url for each slide in an array in the order they are to be shown
        // this makes it easier to maintain when you want to add or remove a slide or change their order
        // we only have one slider at the moment but this makes it more general

        // these are the offsets in the array describing a slide. Done as indexes rather than named as easier to set up sliders array
        const img_in = 0; // Already checked 
        const brand = 8;
        const item = 2;
        const price = 3;
        const date = 4;
        const des = 9;

        const sliders = [];
        sliders.push(js_array_new_products);

        //document.write(sliders[0]);

        // Silider for New Product
        sliders.forEach(createSlider);

        const div_title = document.createElement("DIV");
        const title = document.createElement("H1");
        const hr = document.createElement("HR");
        const br = document.createElement("BR");
        const text10 = document.createTextNode("New Stores");

        div_title.appendChild(title);
        div_title.appendChild(hr);
        div_title.appendChild(br);
        title.appendChild(text10);

        div_title.classList.add("title-product");
        document.body.appendChild(div_title);

    // Silider for New Features
    //sliders1.forEach(createSlider);

    function createSlider(slider, sliderno) {
        // document.write(slider);
        const div1 = document.createElement('DIV');
        const div2 = document.createElement('DIV');
        const ul = document.createElement('UL');

        div1.classList.add("glide", "hero-carousel", "n-main");
        div2.classList.add("glide_track");
        div2.setAttribute("data-glide-el", "track");

        div1.appendChild(div2);
        div2.appendChild(ul);
        document.body.appendChild(div1);

        ul.classList.add("glide__slides", "block-product");

        ul.addEventListener("animationend", animationEnd);


        slider.forEach(createLi);

        function createLi(slide, slideNo) {

            

            const li = document.createElement('LI');

            // Upper
            const div3 = document.createElement('DIV');
            const div4 = document.createElement('DIV');
            const div5 = document.createElement('DIV');
            const h31 = document.createElement('H3');
            const h32 = document.createElement('H3');
            const a1 = document.createElement("A");
            const a2 = document.createElement("A");
            const a3 = document.createElement("A");
            const text2 = document.createTextNode(slide[brand]);
            const text3 = document.createTextNode(slide[item]);
            const text4 = document.createTextNode(slide[price]);
            const text5 = document.createTextNode(slide[date]);
            const text6 = document.createTextNode(slide[des]);


            // Create <img>
            const img = document.createElement('IMG');
            img.src = slide[img_in];

            a1.href = "shoppage_shopcontact_shopaboutus/shop-page.php";
            a2.href = "productcategory_productdetail_productcreateTime/product_detail.html";
            a3.href = "productcategory_productdetail_productcreateTime/product_detail.html";

            div3.classList.add("upper");
            div4.classList.add("two-third-2");
            div5.classList.add("one-thrid");

            div3.appendChild(div4);
            div3.appendChild(div5);
            div4.appendChild(h31);
            div4.appendChild(h32);
            div4.appendChild(a3);
            h31.appendChild(a1);
            h32.appendChild(a2);
            a3.appendChild(img);

            a1.appendChild(text2);
            a2.appendChild(text3);


            // Lower
            const div6 = document.createElement('DIV');
            const p1 = document.createElement("P");
            const p2 = document.createElement("P");
            const p3 = document.createElement("P");
            const div7 = document.createElement('DIV');
            const a4 = document.createElement("A");
            const text1 = document.createTextNode("VIEW DETAIL");

            a4.href = "productcategory_productdetail_productcreateTime/product_detail.html";

            div6.classList.add("lower");
            p1.classList.add("price");
            p2.classList.add("date");
            p3.classList.add("description");
            div7.classList.add("test");
            a4.classList.add("btn-1");

            div6.appendChild(p1);
            div6.appendChild(p2);
            div6.appendChild(p3);
            div6.appendChild(div7);
            div7.appendChild(a4);
            a4.appendChild(text1);
            p1.appendChild(text4);
            p2.appendChild(text5);
            p3.appendChild(text6);

            li.appendChild(div3);

            li.appendChild(div6);

            li.classList.add("glide__slide", "carousel-item", "product");
            /*li.addEventListener("click", slideClicked);
            li.addEventListener("mouseover", slideHovered);
            li.addEventListener("mouseout", slideUnhovered);
            /*
            img.addEventListener("click", slideClicked);
            img.addEventListener("mouseover", slideHovered);
            img.addEventListener("mouseout", slideUnhovered);

            div3.addEventListener("click", slideClicked);
            div3.addEventListener("mouseover", slideHovered);
            div3.addEventListener("mouseout", slideUnhovered);
            */
            img.addEventListener("click", slideClicked);
            img.addEventListener("mouseover", slideHovered);
            img.addEventListener("mouseout", slideUnhovered);

            li.setAttribute('data-slideno', '0' + slideNo);//! needs generalising if you have >10 slides !

            ul.appendChild(li);

        }
    }

    // this is for testing, in real version use whatever required (i.e. whichever element is to have the hero image)
    function ahHeroChange(backgroundImage) {
        document.body.style.background = backgroundImage + " bottom/cover no-repeat";
    }

    function slideClicked(event) {
        var slide = event.target;
        var slideNo = slide.getAttribute('data-slideno');

        // make the hero image the same as the slide's
        ahHeroChange(slide.style.backgroundImage);

    }
    // For img
    function slideHovered(event) {
        var slide = event.target;
        var slider = slide.parentElement;
        var another1 = slider.parentElement;
        var another2 = another1.parentElement;
        var another3 = another2.parentElement;
        var another4 = another3.parentElement;


        another4.style.animationPlayState = 'paused';
        //ahHeroChange(slide.style.backgroundImage);
    }

    function slideUnhovered(event) {
        var slide = event.target;
        var slider = slide.parentElement;
        var another1 = slider.parentElement;
        var another2 = another1.parentElement;
        var another3 = another2.parentElement;
        var another4 = another3.parentElement;

        /*document.write(slide);
        document.write(slider);
        document.write(another1);
        document.write(another2);
        document.write(another3);
        document.write(another4);*/

        //restore the hero image to the first one in the slider
        //ahHeroChange(slider.firstElementChild.style.backgroundImage);

        //get the animation running again
        another4.style.animationPlayState = 'running';
    }

    function animationEnd(event) {
        //find the element that was clicked (it will be a ul element representing a slider)
        var slider = event.target;

        //take the first slide off the list and put it back at the end
        slider.append(this.firstElementChild);

        //change the hero image to the slide which is now the leftmost - use modified heroChange in the final version
        //document.body.style.backgroundImage = this.firstElementChild.style.backgroundImage;

        // toggle the animationName (to an identical keyframes action) to force the animation to start again
        slider.style.animationName = 'sliding' + (Number(event.animationName.replace('sliding', '')) + 1) % 2;
    }

    </script>

     <!--Slider foe new stores-->
     <script>
        const img_in_store = 0;
        const brand_store = 2;

        const sliders1 = [];
        sliders1.push(js_array_new_stores);


        // const sliders1 = [
        //     [
        //         ['shoppage_shopcontact_shopaboutus/images/hm-logo.jpg', 'H&M'],
        //         ['shoppage_shopcontact_shopaboutus/images/Zara-logo.jpg', 'Zara'],
        //         ['shoppage_shopcontact_shopaboutus/images/pull&bear.jpg', 'Pull&Bear'],
        //         ['shoppage_shopcontact_shopaboutus/images/logo4.jpeg', 'Valentino'],
        //         ['shoppage_shopcontact_shopaboutus/images/logo5.jpeg', 'Uniqulo'],
        //         ['shoppage_shopcontact_shopaboutus/images/loho6.jpeg', 'Adidas'],
        //         ['shoppage_shopcontact_shopaboutus/images/logo5.jpeg', 'Uniqulo'], ,
        //         ['shoppage_shopcontact_shopaboutus/images/logo4.jpeg', 'Valentino'], ,
        //         ['shoppage_shopcontact_shopaboutus/images/Zara-logo.jpg', 'Zara']
        //     ]
        // ];

        /*const div_title = document.createElement("SECTION");
        const title = document.createElement("H1");
        const hr = document.createElement("HR");
        const br = document.createElement("BR");
        const text10 = document.createTextNode("Feature Products");

        div_title.appendChild(title);
        div_title.appendChild(hr);
        div_title.appendChild(br);
        title.appendChild(text10);

        div_title.classList.add("title-product");
        document.body.appendChild(div_title);*/

        // Silider for New Features
        sliders1.forEach(createSliderForStore);

        function createSliderForStore(slider, sliderno) {
            const div1 = document.createElement('DIV');
            const div2 = document.createElement('DIV');
            const ul = document.createElement('UL');

            div1.classList.add("glide", "hero-carousel");
            div2.classList.add("glide_track", "new-store");
            div2.setAttribute("data-glide-el", "track");

            div1.appendChild(div2);
            div2.appendChild(ul);
            document.body.appendChild(div1);

            ul.classList.add("glide__slides", "shop-items");

            ul.addEventListener("animationend", animationEnd);

            slider.forEach(createLiForStore);

            function createLiForStore(slide, slideNo) {
                const li = document.createElement('LI');


                const div3 = document.createElement('DIV');
                const div4 = document.createElement('DIV');
                const a1 = document.createElement("A");
                // Create <img>
                const img = document.createElement('IMG');
                img.src = slide[img_in_store];
                const a2 = document.createElement("A");
                const text2 = document.createTextNode("VISIT SHOP");
                const h31 = document.createElement('H3');
                const a3 = document.createElement("A");
                const text3 = document.createTextNode(slide[brand_store]);

                a1.href = "shoppage_shopcontact_shopaboutus/shop-page.php";
                a2.href = "shoppage_shopcontact_shopaboutus/shop-page.php";
                a3.href = "shoppage_shopcontact_shopaboutus/shop-page.php";
                img.alt = "shop-img";

                // Adding class to element
                div3.classList.add("shop-item__image");
                img.classList.add("shop-img1");
                a2.classList.add("shop-item__btn");
                h31.classList.add("shop-item__name");

                // Append into child
                div3.appendChild(a1);
                div3.appendChild(a2);
                a1.appendChild(img);
                a2.appendChild(text2);
                h31.appendChild(a3);
                a3.appendChild(text3);


                li.appendChild(div3);
                li.appendChild(h31);

                li.classList.add("glide__slide", "carousel-item");
                /*li.addEventListener("click", slideClicked);
                li.addEventListener("mouseover", slideHovered);
                li.addEventListener("mouseout", slideUnhovered);
                /*
                img.addEventListener("click", slideClicked);
                img.addEventListener("mouseover", slideHovered);
                img.addEventListener("mouseout", slideUnhovered);

                div3.addEventListener("click", slideClicked);
                div3.addEventListener("mouseover", slideHovered);
                div3.addEventListener("mouseout", slideUnhovered);
                */
                li.addEventListener("click", slideClickedForStore);
                li.addEventListener("mouseover", slideHoveredForStore);
                li.addEventListener("mouseout", slideUnhoveredForStore);

                li.setAttribute('data-slideno', '0' + slideNo);//! needs generalising if you have >10 slides !

                ul.appendChild(li);

            }
        }

        // this is for testing, in real version use whatever required (i.e. whichever element is to have the hero image)
        function ahHeroChange(backgroundImage) {
            document.body.style.background = backgroundImage + " bottom/cover no-repeat";
        }

        function slideClickedForStore(event) {
            var slide = event.target;
            var slideNo = slide.getAttribute('data-slideno');

            // make the hero image the same as the slide's
            ahHeroChange(slide.style.backgroundImage);

            /* I don't know what these functions do - they were executed in the original on a click

              number(slideno);
              h4(slide.firstElementChild.querySelector('p').innerHTML);// text1 of the slide is passed to h4
              h1(slide.firstElementChild.querySelector('h3').innerHTML;// text2 of the slide is passed to h1

            */
        }
        // For img
        function slideHoveredForStore(event) {
            var slide = event.target; // img
            var slider = slide.parentElement; // a
            var another1 = slider.parentElement; // div
            var another2 = another1.parentElement; // li
            var another3 = another2.parentElement; // ul


            another3.style.animationPlayState = 'paused';
            //ahHeroChange(slide.style.backgroundImage);
        }

        function slideUnhoveredForStore(event) {
            var slide = event.target; // img
            var slider = slide.parentElement; // a
            var another1 = slider.parentElement; // div
            var another2 = another1.parentElement; // li
            var another3 = another2.parentElement; // ul

            /*document.write(slide);
            document.write(slider);
            document.write(another1);
            document.write(another2);
            document.write(another3);
            document.write(another4);*/

            //restore the hero image to the first one in the slider
            //ahHeroChange(slider.firstElementChild.style.backgroundImage);

            //get the animation running again
            another3.style.animationPlayState = 'running';
        }

        function animationEnd(event) {
            //find the element that was clicked (it will be a ul element representing a slider)
            var slider = event.target;

            //take the first slide off the list and put it back at the end
            slider.append(this.firstElementChild);

            //change the hero image to the slide which is now the leftmost - use modified heroChange in the final version
            //document.body.style.backgroundImage = this.firstElementChild.style.backgroundImage;

            // toggle the animationName (to an identical keyframes action) to force the animation to start again
            slider.style.animationName = 'sliding' + (Number(event.animationName.replace('sliding', '')) + 1) % 2;
        }
    </script>

    <!--Feature Product-->
    <section class="feature-product">
        <div class="title-product">
            <h1>Feature Products</h1>
            <hr />
            <br />
        </div>

        <section class='n-main'>
            <section class='block-product'>

                <?php
                    foreach ($feature_products as $feature){
                        echo " <div class='product'>
                        <div class='upper'>
                            <div class='two-third-2'>
                                <h3><a href='shoppage_shopcontact_shopaboutus/shop-page.php' target='_blank'>$feature[8]</a></h3>
                                <h3><a href='productcategory_productdetail_productcreateTime/product_detail_new.html'>$feature[2]</a></h3>
                                <a href='./productcategory_productdetail_productcreateTime/product_detail_new.html'><img src='./shoppage_shopcontact_shopaboutus/images/zara-pro2.jpg' alt=''></a>
                            </div>
                            <div class='one-thrid'>
                            </div>
                        </div>
                        <div class='lower'>
                            <p class='price'>$feature[3]</p>
                            <p class='date'>$feature[4]</p>
                            <p class='description'>T-shirt in premium cotton jersey.</p>
                            <div class='test'>
                                <a href='productcategory_productdetail_productcreateTime/product_detail_new.html' class='btn-1'>VIEW DETAIL</a>
                            </div>
                        </div>
                    </div>";
    
                    }
                ?>

                <!-- <div class="product">
                    <div class="upper">
                        <div class='two-third'>
                            <h3><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">ZARA</a></h3>
                            <h3><a href="productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 1</a></h3>
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html"><img src="./shoppage_shopcontact_shopaboutus/images/zara-pro1.jpg" alt=""></a>
                        </div>
                        <div class="one-third"></div>
                    </div>
                    <div class="lower">
                        <p class='price'>₫ 299.000</p>
                        <p class='date'>9/4/2021</p>
                        <p class='description'>T-shirt in premium cotton jersey.</p>
                        <div class="btn">
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="upper">
                        <div class='two-third-2'>
                            <h3><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">ZARA</a></h3>
                            <h3><a href="productcategory_productdetail_productcreateTime/product_detail_new.html">T-shirt 2</a></h3>
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html"><img src="./shoppage_shopcontact_shopaboutus/images/zara-pro2.jpg" alt=""></a>
                        </div>
                        <div class="one-thrid">
                        </div>
                    </div>
                    <div class="lower">
                        <p class='price'>₫ 399.000</p>
                        <p class='date'>9/4/2021</p>
                        <p class='description'>T-shirt in premium cotton jersey.</p>
                        <div class="test">
                            <a href="productcategory_productdetail_productcreateTime/product_detail_new.html" class='btn-1'>VIEW DETAIL</a>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="upper">
                        <div class='two-third-2'>
                            <h3><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">H&M</a></h3>
                            <h3><a href="productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 3</a></h3>
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html"><img src="./shoppage_shopcontact_shopaboutus/images/zara-pro1.jpg" alt=""></a>
                        </div>
                        <div class="one-thrid">
                        </div>
                    </div>
                    <div class="lower">
                        <p class='price'>₫ 299.000</p>
                        <p class='date'>9/4/2021</p>
                        <p class='description'>T-shirt in premium cotton jersey.</p>
                        <div class="test">
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="upper">
                        <div class='two-third-2'>
                            <h3><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">H&M</a></h3>
                            <h3><a href="productcategory_productdetail_productcreateTime/product_detail_new.html">T-shirt 4</a></h3>
                            <a href="./productcategory_productdetail_productcreateTime/product_detail_new.html"><img src="./shoppage_shopcontact_shopaboutus/images/zara-pro2.jpg" alt=""></a>
                        </div>
                        <div class="one-thrid">
                        </div>
                    </div>
                    <div class="lower">
                        <p class='price'>₫ 399.000</p>
                        <p class='date'>9/4/2021</p>
                        <p class='description'>T-shirt in premium cotton jersey.</p>
                        <div class="test">
                            <a href="productcategory_productdetail_productcreateTime/product_detail_new.html" class='btn-1'>VIEW DETAIL</a>
                        </div>
                    </div>
                </div>

                <div class="product">
                    <div class="upper">
                        <div class='two-third-2'>
                            <h3><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">H&M</a></h3>
                            <h3><a href="productcategory_productdetail_productcreateTime/product_detail.html">T-shirt 5</a></h3>
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html"><img src="productcategory_productdetail_productcreateTime/store/t-shirt-5.png" alt=""></a>
                        </div>
                        <div class="one-thrid">
                        </div>
                    </div>
                    <div class="lower">
                        <p class='price'>₫ 250.000</p>
                        <p class='date'>9/4/2021</p>
                        <p class='description'>T-shirt in premium cotton jersey.</p>
                        <div class="test">
                            <a href="productcategory_productdetail_productcreateTime/product_detail.html" class='btn-1'>VIEW DETAIL</a>
                        </div>
                    </div>
                </div> -->

            </section>
        </section>

    </section>

    <!-- Features  -->
    <section>
        <div class="title-product">
            <h1>Feature Store</h1>
            <hr />
            <br />
        </div>

        

        <section class="shop-container">
            <div class="shop-list">
            <?php
                foreach ($feature_stores as $store){
                    echo"<div class='shop-item'>
                            <div class='shop-item__image'>
                                <a href='shoppage_shopcontact_shopaboutus/shop-page.php' target='_blank'><img src='shoppage_shopcontact_shopaboutus/images/logo1.jpg' class='shop-img' alt='shop-img'></a>
                                <a href='shoppage_shopcontact_shopaboutus/shop-page.php' class='shop-item__btn' target='_blank'>Visit Shop</a>
                            </div>
                            <h3 class='shop-item__name'><a href='shoppage_shopcontact_shopaboutus/shop-page.php' target='_blank'>$store[2]</a></h3>
                    </div>";
                }
            ?>
                <!-- <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank"><img src="shoppage_shopcontact_shopaboutus/images/logo1.jpg" class="shop-img" alt="shop-img"></a>
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" class="shop-item__btn" target="_blank">Visit Shop</a>
                    </div>
                    <h3 class="shop-item__name"><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">Nike</a></h3>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank"><img class="shop-img" src="shoppage_shopcontact_shopaboutus/images/logo2.jpeg" alt="shop-img"></a>
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" class="shop-item__btn" target="_blank">Visit Shop</a>
                    </div>
                    <h3 class="shop-item__name"><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">Vans</a></h3>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank"><img class="shop-img" src="shoppage_shopcontact_shopaboutus/images/logo3.jpeg" alt="shop-img"></a>
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" class="shop-item__btn" target="_blank">Visit Shop</a>
                    </div>
                    <h3 class="shop-item__name"><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">Champion</a></h3>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank"><img class="shop-img" src="shoppage_shopcontact_shopaboutus/images/logo4.jpeg" alt="shop-img"></a>
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" class="shop-item__btn" target="_blank">Visit Shop</a>
                    </div>
                    <h3 class="shop-item__name"><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">Routine</a></h3>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank"><img class="shop-img" src="shoppage_shopcontact_shopaboutus/images/logo5.jpeg" alt="shop-img"></a>
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" class="shop-item__btn" target="_blank">Visit Shop</a>
                    </div>
                    <h3 class="shop-item__name"><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">Aldo</a></h3>
                </div>
                <div class="shop-item">
                    <div class="shop-item__image">
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank"><img class="shop-img" src="shoppage_shopcontact_shopaboutus/images/loho6.jpeg" alt="shop-img"></a>
                        <a href="shoppage_shopcontact_shopaboutus/shop-page.php" class="shop-item__btn" target="_blank">Visit Shop</a>
                    </div>
                    <h3 class="shop-item__name"><a href="shoppage_shopcontact_shopaboutus/shop-page.php" target="_blank">G2000</a></h3>
                </div> -->
            </div>
        </section>
    </section>

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
    <script type="text/javascript" src="Myaccount/myaccount.js">

    </script>



</body>
</html>
