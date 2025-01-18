<?php 

    // #4 to define variables
    $name = "yoshi";
    $age = 25;
    $space = " ";

    // #4 to define constants
    define('ADDRESS', '4th cross street');
    define('CITY', 'nyc');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php file</title>
</head>
<body>
    <h1>User profile page</h1>
    <span><?php echo $name, $space, $age, $space, ADDRESS, $space, CITY ?></span>

</body>
</html>