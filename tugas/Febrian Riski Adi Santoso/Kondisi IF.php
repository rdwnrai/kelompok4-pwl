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
$nilai = 60;

if ($nilai >= 50)
    echo "Anda Lulus";
else
    echo "Anda tidak lulus";
?>
</body>
</html>