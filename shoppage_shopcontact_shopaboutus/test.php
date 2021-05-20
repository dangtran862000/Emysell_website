<!DOCTYPE html>
<html>
<body>

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

$time = array();
$items = array();
$count_line = 0;
$count = 0;
if (($handle = fopen('products.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        $count++;
        if ($count == 1) { continue; }
        $items[] = $data;
        $time[] = $data;
    }
    print_r($product)."<br />\n";
    // echo $count_line;
    fclose($handle);

    

}

// $handle = fopen($_POST['products.csv'], "r");
// $count = 0;
// while (($fields = fgetcsv($handle, 0, ",")) !== FALSE) {
//     $count++;
//     if ($count == 1) { continue; }
//     print_r($fields)
// }

$category = [];
$max_prob = 0;
for ($row = 0; $row < 1000; $row++) {
    if ($time[$row][4] == 22) {
        $category[] = $time[$row];
        
    }
}

$new_product = [];
$flag = 0;

for ($i = 0; $i < 17; $i++) {
    
    $new_product[] = $category[$i][3];

}

rsort($new_product);

for ($i = 0; $i < 5; $i++) {
    $timeProduct = $new_product[$i];
    for ($j = 0; $j < 17; $j++){
        if ($timeProduct == $category[$j][3]){
            $name_product_time = $category[$j][1];
            echo "<div class='product'>
            <div class='upper'>
            <div class='two-third'>
                <h3><a ' href='../productcategory_productdetail_productcreateTime/product_detail.html'></a></h3>
                <a href='../productcategory_productdetail_productcreateTime/product_detail.html'><img src='../productcategory_productdetail_productcreateTime/store/$name_product_time.png' alt=''></a>
              </div>
            </div>
            <div class='lower'>
              <p class='price'>$name_product_time</p>
              <p style='margin-left: 50%; margin-bottom: 0;'> $product_price USD</p>
              <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
              <div class='btn'>
                <a href='../productcategory_productdetail_productcreateTime/product_detail.html' class='btn-1'>VIEW DETAIL</a>
              </div>
            </div>
          </div>";
        }
    }
}
?>

</body>
</html>