<!DOCTYPE html>
<html>
<head>
    <title>modularitas</title>
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

    <!-- HEADER -->
    <?php
        echo "<h2>Modularitas PHP </h2>";
        echo "<hr>";
    ?>

    <!-- SIDEBAR -->
    <?php
        echo "<b>Menu Navigasi:</b><br>";
        echo "<ul>";
        echo "<li><a href='#'>Beranda</a></li>";
        echo "<li><a href='#'>Profil</a></li>";
        echo "<li><a href='#'>Tugas</a></li>";
        echo "<li><a href='#'>Kontak</a></li>";
        echo "</ul>";
        echo "<hr>";
    ?>

    <!-- CONTENT -->
    <?php
        echo "<h3>Selamat Datang!</h3>";
        echo "<p>belajar modular.</p>";
        echo "<p>Dosen Pengampu: <b>Akbar Muchbarak, M.Kom</b></p>";
    ?>

    <!-- FOOTER -->
    <?php
        echo "<hr>";
        echo "<p>&copy; " . date("Y") . " Pemrograman Web Lanjut - S6F</p>";
    ?>

</body>
</html>
