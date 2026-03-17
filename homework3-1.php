<?php
$n = 30;
$sum = 0;
$prod = 1;

echo "<h1>Homework 3-1</h1>";

for ($i = 1; $i <= $n; $i++) {
    echo $i . " ";
    $sum += $i;
    $prod *= $i;
}

echo "<br>";
echo "합: " . $sum . "<br>";
echo "곱: " . $prod;
?>