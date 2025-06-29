<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable_objek</title>
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
$murid = new \stdClass;
$murid->nama = "Upin";
$murid->usia = 5;
$murid->hobi = array("membaca", "mewarnai");

echo "$murid->nama berusia $murid->usia tahun <br/>";
// Upin berusia 5 tahun

echo "Hobinya : ";
echo $murid->hobi[0];
echo " dan ";
echo $murid->hobi[1];
// Hobinya : membaca, mewarnai
?>
</body>
</html>