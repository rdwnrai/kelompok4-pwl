<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>konstanta</title>
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
define('JUDUL', 'Hitung Luas Lingkaran');
define("PHI", 3.14);

echo JUDUL;

$r = 10;
echo "<br>Jari-jari : $r<br/>";

$luas = PHI * $r * $r;
echo "Luas Lingkaran = $luas";
?>
</body>
</html>