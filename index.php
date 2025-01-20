<?php 

$blogs = [
    [ 'title' => 'italic', 'author' =>'paul', 'description' => 'lorem', 'likes' => 30],
    [ 'title' => 'oblique pen copperplate','author' =>'schin', 'description' => 'lorem', 'likes' => 40],
    [ 'title' => 'straight pen copperplate', 'author' =>'paul', 'description' => 'lorem', 'likes' => 40],
];

// print_r($blogs[2]);
// echo ($blogs[2]['author']);
$blogs[] = ['title' => 'spencerian', 'author' => 'schin', 'description' => 'lorem', 'likes' => 50];
$popped = array_pop($blogs);

// print_r($popped);
print_r($blogs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-dimensional Arrays</title>
</head>
<body>

</body>
</html>