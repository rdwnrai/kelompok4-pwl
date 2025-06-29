<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contoh2</title>
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
$bil1 = 100;
$bil2 = 20;
$teks1 = "PHP";
$teks2 = "php";

printf("%d == %d hasilnya %d<br/>", $bil1, $bil2, $bil1 == $bil2);
// 100 == 20 hasilnya 0

printf("%d != %d hasilnya %d<br/>", $bil1, $bil2, $bil1 != $bil2);
// 100 != 20 hasilnya 1

printf("%d >= %d hasilnya %d<br/>", $bil1, $bil2, $bil1 >= $bil2);
// 100 >= 20 hasilnya 1

printf("%s == %s hasilnya %d<br/>", $teks1, $teks2, $teks1 == $teks2);
// PHP == php hasilnya 0

printf("%s != %s hasilnya %d<br/>", $teks1, $teks2, $teks1 != $teks2);
// PHP != php hasilnya 1
?>
</body>
</html>
