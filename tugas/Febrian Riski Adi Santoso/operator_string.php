<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator string</title>
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
$teks1 = "Aku Sedang Belajar";
$teks2 = "Pemrograman WEB 2";
$teks3 = "Menggunakan PHP";

$hasil = $teks1 . $teks2 . $teks3;
printf("hasil : %s<br/>", $hasil);
// hasil : Aku Sedang BelajarPemrograman WEB 2Menggunakan PHP

$hasil = $teks1 . " " . $teks2 . " " . $teks3;
echo "hasil : " . $hasil;
// hasil : Aku Sedang Belajar Pemrograman WEB 2 Menggunakan PHP
?>
</body>
</html>