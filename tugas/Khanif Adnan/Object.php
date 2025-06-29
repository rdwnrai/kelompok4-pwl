<div class="content">
    <?php
    $murid = new \stdClass;
    $murid->nama = "Khanif Adnan";
    $murid->usia = 25;
    $murid->hobi = array("Joging", "Mendengarkan musik");

    echo "$murid->nama berusia $murid->usia tahun <br/>";

    // Khanif Adnan berusia 25 tahun

    echo "Hobinya : ";
    echo $murid->hobi[0];
    echo " dan ";
    echo $murid->hobi[1];
    // Hobinya : membaca, mewarnai
    ?>
</div>