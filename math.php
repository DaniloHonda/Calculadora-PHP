<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAKA</title>
</head>

<body>
  <form action="math.php" method="post">
    <!-- <label>x:</label>
    <input type="text" name="x"> -->

    <label>diameter:</label>
    <input type="text" name="d">

    <input type="submit" value="diameter">
</body>

</html>

<?php
// abs() returns the absolute value, -1 = 1
// round() returns the round of that number, 5.6 = 6
// floor() always round down, 5.99 = 5
// ceil() always round up, 5.01 = 6
// pow() power, pow(2, 3) = 8
// sqrt() square root, sqrt(4) = 2
// max() gets the bigger number, 5, 5353, 342 = 5353
// min() gets the lowest number, 5, 5353, 342 = 5
// pi() gets pi
// rand() gets a random number

// $total = abs($x)
// $total = round($x);
// $total = floor($x);
// $total = ceil($x);
// $total = pow($x); 
// $total =max($x, $y, $z); 
// $total = min($x, $y, $z);
// $total = pi();
// $total = rand(89, 299);

// echo "<br><br>", $total;

$d = $_POST['d'];

$pi = null;
$radius = null;
$circunference = null;
$area = null;
$volume = null;

$pi = pi();
$radius = $d/2;
$circunference = round(2*$pi*$radius, 2);
$area = round($pi*pow($radius, 2), 2);
$volume = round((4/3)*$pi*pow($radius, 3), 2);

echo "<br>". "<br>". "Circunference = ". $circunference;
echo "<br>". "<br>". "Area = ". $area;
echo "<br>". "<br>". "Volume = ". $volume;
?>