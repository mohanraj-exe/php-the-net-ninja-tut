<?php 

// indexed arrays
$peopleOne = ['shaun', 'crystal', 'ryu'];
// echo "$peopleOne[1] ";

$peopleTwo = array('ken', 'chun-li');
// print "$peopleTwo[0]  ";

$ages = [10, 20, 30, 40, 50];
// echo $ages;

$ages[1] = 25;
$ages[] = 60;
array_push($ages, 70);
// print_r($ages);
// echo count($ages);

// Merge arrays
$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// Associative arrays (Key & value pairs)
$ninjasOne = ['name' => 'mohan', 'age' => 25, 'city' => 'blr'];
// echo($ninjasOne['age']);
$ninjasOne['city'] = 'nkl';
// print_r($ninjasOne);

$ninjasTwo = array('profession' => 'software', 'interests' => 'coding, fitness');
$ninjasTwo['salary'] = 'lpa';
$ninjasTwo['team'] = 'csk'; 
// print_r($ninjasTwo);
$ninjasThree = array_merge($ninjasOne, $ninjasTwo);
print_r($ninjasThree);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

</body>
</html>