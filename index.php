<?php 

$array1 = [
    ['name' => 'mario', 'age' => 20],
    ['name' => 'yoshi', 'age' => 30]
];

echo $array1[0]['name'];

// built-in functions
$color = 'crimson';
echo strtoupper($color);

// custom function
// #1
function sayHello($name = 'shaun'){
    echo "good morning $name";
};

sayHello();

// #2 - passing associative array as an argument 
function formatProduct($product){
return "{$product[1]['name']} costs {$product[1]['price']}";
};

$formatted = formatProduct([['name' => 'gold star', 'price' => 20], ['name' => 'silver star', 'price' => 10]]);
echo $formatted;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>

</body>
</html> 