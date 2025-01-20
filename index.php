<?php 

// conditional statements
$price = 20;
if($price > 20){
    echo 'the condition is met';
} else{
   echo 'the condition is not met';
}

// conditional statements inside the for loop
$products = [
    ['name' => 'soap', 'price' => 2],
    ['name' => 'comb', 'price' => 20],
    ['name' => 'socks', 'price' => 30],
    ['name' => 'towel', 'price' => 40],
];

foreach($products as $product){
    if($product['price'] < 15 && $product['price'] >= 2){
        echo $product['name'] . '<br />';
    }

    if($product['price'] > 30 || $product['price'] < 20){
        echo $product['name'] . '<br />';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional statement</title>
</head>
<body>
    <div>
        <ul>
        <?php foreach($products as $product) { ?>
            <?php if($product['price'] >= 2) { ?>
                <li><?php echo $product['name'] ?></li>
            <?php } ?>
        <?php }?>
        </ul>
    </div>
</body>
</html> 