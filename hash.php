<?php
file_get_contents('random_number.txt');

$hashed_number = hash_file('md5', 'random_number.txt');

$file = 'hashed_number.txt';
$current = file_get_contents($file);
$current = $hashed_number;
file_put_contents($file, $current);

echo $hashed_number;
?>