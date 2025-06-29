<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch case</title>
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
$bulan = 2;

switch ($bulan) {
    case 1: echo "Januari"; break;
    case 2: echo "Februari"; break;
    case 3: echo "Maret"; break;
    case 4: echo "April"; break;
    case 5: echo "Mei"; break;
    case 6: echo "Juni"; break;
    case 7: echo "Juli"; break;
    case 8: echo "Agustus"; break;
    case 9: echo "September"; break;
    case 10: echo "Oktober"; break;
    case 11: echo "November"; break;
    case 12: echo "Desember"; break;
}
?>
</body>
</html>