<div class="content">
    <?php
    define('JUDUL', 'Hitung Luas Lingkaran');
    define("PHI", 3.14);

    echo JUDUL;

    $r = 10;
    echo "<br>Jari-jari : $r<br/>";

    $luas = PHI * $r * $r;
    echo "Luas Lingkaran = $luas";
    ?>
</div>