<?php
$random_number = (rand(1111111111,9999999999));

$file = 'random_number.txt';
$current = $random_number;
file_put_contents($file, $current);

echo $random_number;
?>


