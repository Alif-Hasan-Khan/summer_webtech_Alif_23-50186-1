<?php
$numbers = [12, 45, 67, 23, 89, 34];
sort($numbers); // Sort in ascending order

$secondMax = $numbers[count($numbers) - 2];

echo "Second maximum number is: " . $secondMax;
?>
