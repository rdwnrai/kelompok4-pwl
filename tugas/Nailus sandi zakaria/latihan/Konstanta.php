            <?php
                define ("JUDUL", "Hitung Luas Bola");
                define ("PHI", 3.14);

                echo JUDUL;

                $r = 6371;
                echo "<br>Jari-jari : $r<br>";

                $luas = PHI * $r * $r;
                echo "Luas Bola = $luas";
        
            ?>