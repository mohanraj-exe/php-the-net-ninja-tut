<?php 

$calligraphy = [ 'italic', 'copperplate', 'spencerian', 'gothic', 'fraktur' ];
// For loop
for($i = 0; $i < count($calligraphy); $i++){
    echo $calligraphy[$i] . '<br />';
}

// For each loop
foreach($calligraphy as $script){
    echo $script .'<br />';
}

// Multi-dimensional array - For each loop
$products = [
    ['title' => 'soap', 'description' => 'lorem', 'price' => 20],
    ['title' => 'comb', 'description' => 'lorem', 'price' => 30],
    ['title' => 'towel', 'description' => 'lorem', 'price' => 40],
    ['title' => 'dress', 'description' => 'lorem', 'price' => 50]
];

// For each loop
foreach($products as $product){
    echo $product['title'] . ' - ' . $product['description'] . ' - ' . $product['price'];
    echo '<br />';
}

// While loop
$i = 0;
while($i < count($products)){
    echo $products[$i]['title'] . ' - '. $products[$i]['description'] . ' - ' . $products[$i]['price'] . "<br />";
    $i++;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <h3>Products</h3>
    <ul>
        <?php foreach($products as $product){ ?>
            <h4><?php echo $product['title'] ?></h4>
            <p>$ <?php echo $product['price'] ?></p>
        <?php } ?>    
    </ul>
</body>
</html>