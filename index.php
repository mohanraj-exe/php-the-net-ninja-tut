<?php 

    $stringOne = 'my email is ';
    $stringTwo = 'smr@gmail.com';
    $name = "yoshi";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php file</title>
</head>
<body>
    <!-- String concatenation -->
    <h1><?php echo $stringOne.$stringTwo ?></h1>
    <h2><?php echo "Hi I am $name" ?></h2>
    <p><?php echo 'Hi I\'m a software developer'?></p>
    <p><?php echo "Today is my \"birthday\"" ?></p>

    <!-- It will print string index -->
    <p><?php echo $name[4]; ?></p>
    <p><?php echo strlen($name); ?></p>
    <p><?php echo strtoupper($name); ?></p>
    <p><?php echo strtolower($name); ?></p>
    <p><?php echo str_replace('y', 'k', $name); ?></p>
</body>
</html>