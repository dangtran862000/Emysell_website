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


$product = array();
$count_line = 0;
$count = 0;
if (($handle = fopen('products.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        $count++;
        if ($count == 1) { continue; }
        
        if ($data[4] == 22 and $data[6] == "TRUE") {
            print_r($data[0]);
            print_r($data[1]);
            print_r($data[3]);
            print_r($data[4]);
            echo '' . "<br />\n"; // Array
            $count_line++;
            $product[] = $data[1];
            
        }
    
        
    }
    print_r($product)."<br />\n";
    // echo $count_line;
    fclose($handle);

    

}

$product = array_unique($product);
print_r($product_new);
echo '' . "<br />\n";
for ($i = 0; $i <= count($product); $i++) {
    print_r($product[$i]);
    echo '' . "<br />\n";
}
// $handle = fopen($_POST['products.csv'], "r");
// $count = 0;
// while (($fields = fgetcsv($handle, 0, ",")) !== FALSE) {
//     $count++;
//     if ($count == 1) { continue; }
//     print_r($fields)
// }

?>

</body>
</html>