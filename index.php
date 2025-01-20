<?php 

// variable scope - block scope
function myFunc(){
    $price = 10;
    echo $price;
}

myFunc();
echo $price;

// Global scope
$name = 'mario';
function sayHello(){
    global $name;
    $name = 'shaun'
;    echo "hello $name ";
};

sayHello();
echo $name;

// Over-riding the global variable by writing '&' prefix to an argument
$name = 'mario';
function sayBye(&$name){
    $name = 'shaun'
;    echo "bye $name ";
};

sayBye($name);
echo $name;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable scope</title>
</head>
<body>

</body>
</html> 