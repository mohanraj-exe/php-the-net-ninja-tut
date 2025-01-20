<?php 

$products = [
    ['name' => 'soap', 'price' => 20],
    ['name' => 'towel', 'price' => 30],
    ['name' => 'pen', 'price' => 40],
    ['name' => 'paper', 'price' => 50]
];

foreach($products as $product){
    if($product['name'] == 'paper'){
        break;
    }
    if($product['price'] >= 40){
        continue;
    }
    echo $product['name'] . "<br />";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue and break</title>
</head>
<body>
    
</body>
</html> 