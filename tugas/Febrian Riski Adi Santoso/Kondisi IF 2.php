<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kondisi if</title>
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
$hari = 3;

if ($hari == 1) echo "Senin";
elseif ($hari == 2) echo "Selasa";
elseif ($hari == 3) echo "Rabu";
elseif ($hari == 4) echo "Kamis";
elseif ($hari == 5) echo "Jumat";
elseif ($hari == 6) echo "Sabtu";
elseif ($hari == 7) echo "Minggu";
else echo "Salah kode hari";
?>
</body>
</html>
