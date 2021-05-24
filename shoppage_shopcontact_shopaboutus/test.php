<!DOCTYPE html>
<html>
<body>

<?php
// // $rows = 0;
// // $cells = 0;
// // $fp = fopen("products.csv","r");
// // $flag = true;
// // while(($content = fgetcsv($fp, 1000, “,”)) !== FALSE){
// //     if($flag) { $flag = false; continue; }
// //     print_r($content[1]);
// //     echo '' . "<br />\n";
// //     $rows++;
// //     $cells += count($content);
// // }
// // fclose($fp);

// // echo "Total rows = $rows, total cells = $cells";

// $time = array();
// $items = array();
// $count_line = 0;
// $count = 0;
// if (($handle = fopen('products.csv', 'r')) !== FALSE) { // Check the resource is valid
//     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
//         $count++;
//         if ($count == 1) { continue; }
//         $items[] = $data;
//         $time[] = $data;
//     }
//     print_r($product)."<br />\n";
//     // echo $count_line;
//     fclose($handle);

    

// }

// $category = [];
// $max_prob = 0;
// for ($row = 0; $row < 1000; $row++) {
//     if ($time[$row][4] == 22) {
//         $category[] = $time[$row];
        
//     }
// }

// $new_product = [];
// $flag = 0;

// for ($i = 0; $i < 17; $i++) {
    
//     $new_product[] = $category[$i][3];

// }

// rsort($new_product);

      

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

    
    $new_product_des = [];
    $new_product_ase = [];
    
    
    for ($i = 0; $i < count( $category); $i++) {
        
        $new_product_des[] = $category[$i][3];
        $new_product_ase[] = $category[$i][3];
    
    }
    
    rsort($new_product_des);
    sort($new_product_ase);

    for ($i = 0; $i < 1; $i++) {
        $timeProduct_des = $new_product_des[$i];
        for ($j = 0; $j < 17; $j++){
            if ($timeProduct_des == $category[$j][3]){
                $name_product_time_des = $category[$j][1];
                $price_product_time_des = $category[$j][2];
                print_r($name_product_time_des);
            }
        }
    }
    for ($i = 0; $i < 1; $i++) {
        $timeProduct_ase = $new_product_ase[$i];
        for ($j = 0; $j < 17; $j++){
            if ($timeProduct_ase == $category[$j][3]){
                $name_product_time_ase = $category[$j][1];
                $price_product_time_ase = $category[$j][2];
                print_r($name_product_time_ase);
            }
        }
    }


    // for ($i = 0; $i < count($category); $i++) {
    //   // print_r($category[$i][1]);
    //   $count_product = $count_product + 1;
    // }
    // $pageNumber = ceil($count_product / $productInPage);
    
    
    // if ($page <= 1) {
    //   $previous_page = 1;
    // } else {
    //   $previous_page = $page - 1;
    // }
    // if ($page >= $pageNumber) {
    //   $next_page = $pageNumber;
    // } else {
    //   $next_page = $page + 1;
    // }
    // echo '' . "<br />\n";
    // echo "<a href='test.php?page=$previous_page'>Previous </a>";
    // for ($t = 1; $t <= $pageNumber; $t++) {
    //   if ($t == $pageNumber) {
    //     if ($page == $t) {
    //       echo "<a href='test.php?page=$t' style='text-decoration: none; color: red;'> $t </a>  ";
    //     } else {
    //       echo "<a href='test.php?page=$t' style='text-decoration: none;'> $t </a>  ";
    //     }
    //   } else {
    //     if ($page == $t) {
    //       echo "<a href='test.php?page=$t' style='text-decoration: none; color: red;'> $t </a> - ";
    //     } else {
    //       echo "<a href='test.php?page=$t' style='text-decoration: none;'> $t </a> - ";
    //     }
        
    //   }
    // }
    // echo "<a href='test.php?page=$next_page' > Next </a>";

    
?>


</body>
</html>