<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Perkenalan dengan Function parameter PHP</title>
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
        
        function perkenalan($nama, $umur, $hobi) {
            echo "<h3>Perkenalan Diri</h3>";
            echo "<p>Nama saya adalah <b>$nama</b>.</p>";
            echo "<p>Saya berumur <b>$umur</b> tahun.</p>";
            echo "<p>Hobi saya adalah <b>$hobi</b>.</p>";
        }

       
        perkenalan("febrian", 22, "GAMING");

    
        echo "<br>";
        perkenalan("febrian riski", 25, "GyM");
    ?>

</body>
</html>
