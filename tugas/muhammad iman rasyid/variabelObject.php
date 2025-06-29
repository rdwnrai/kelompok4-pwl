<div class="content-box">
<?php
    echo '<p>Hello php</p>';
    
    $murid = new \stdClass;
    $murid->nama = "Iman Rasyid";
    $murid->usia = 25;
    $murid->hobi = array ("Renang", "Playstation");

    echo "$murid->nama berusia $murid->usia tahun <br>";

    echo "Hobinya : ";
    echo $murid->hobi[0];
    echo " dan ";
    echo $murid->hobi[1];       
?>
</div>