<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .centered {
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           text-align: center;
}
    </style>
    
<div class="centered">

<?php

$bil1 = 110;
$bil2 = 25;

$hasil = $bil1 + $bil2;
echo "$bil1 + $bil2 = $hasil<br/>";

$hasil = $bil1 - $bil2;
echo "$bil1 - $bil2 = $hasil<br/>";

$hasil = $bil1 * $bil2;
echo "$bil1 * $bil2 = $hasil<br/>";

$hasil = $bil1 / $bil2;
echo "$bil1 / $bil2 = $hasil<br/>";

$hasil = $bil1 % $bil2;
echo "$bil1 % $bil2 = $hasil<br/>";

$hasil = $bil1++;
echo "$bil1++ = $hasil<br/>";

$hasil = $bil2--;
echo "$bil2-- = $hasil<br/>";
?>
</body>
</html>