<?php 

    $radius = 24; // integer
    $pi = 3.14; // float

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first php file</title>
</head>
<body>
   <!-- Mathematical operators -->
   <!-- +, -, /, %, ** -->
    <p><?php echo $pi * $radius ** 2 ?></p>

    <!-- Order of operation - B I D M A S -->
    <p><?php echo 2 * (4 + 9) / 3 ?></p>

    <!-- Increment / Decrement operators -->
    <!-- Pre-increment operator - First increase $radius by one, then returns $radius -->
    <p>
        <?php echo ++$radius, $radius ?>
    </p>
    <!-- 2525 -->

    <!-- Post-increment operator - First returns $radius, then increases $radius by one -->
    <p><?php echo $radius++, $radius ?></p> 
    <!-- 2526 -->

    <!-- Pre-decrement operator -->
    <p><?php echo --$radius, $radius ?></p>
    <!-- 2525 -->

    <!-- Post-decrement operator -->
    <p><?php echo $radius--, $radius ?></p>
    <!-- 2524 -->

    <!-- Short-hand operators -->
    <p><?php echo $radius += 10; ?></p>

    <!-- Numer function -->
    <p><?php echo floor($pi); ?></p>
    <p><?php echo ceil($pi); ?></p>
    <p><?php echo pi(); ?></p>

</body>
</html>