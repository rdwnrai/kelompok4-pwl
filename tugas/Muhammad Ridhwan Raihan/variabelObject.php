<div class="content-box">
<?php
    echo '<p>Hello php</p>';
    
    $murid = new \stdClass;
    $murid->nama = "Rdwn";
    $murid->usia = 25;
    $murid->hobi = array ("Mabar", "Mancing");

    echo "$murid->nama berusia $murid->usia tahun <br>";

    echo "Hobinya : ";
    echo $murid->hobi[0];
    echo " dan ";
    echo $murid->hobi[1];       
?>
</div>