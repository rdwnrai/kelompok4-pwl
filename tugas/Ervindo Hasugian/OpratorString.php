<?php

$teks1 = "𝐀𝐤𝐮 𝐒𝐞𝐝𝐚𝐧𝐠 𝐁𝐞𝐥𝐚𝐣𝐚𝐫";
            $teks2 = "𝐏𝐞𝐦𝐫𝐨𝐠𝐫𝐚𝐦𝐚𝐧 𝐖𝐄𝐁 𝟐";
            $teks3 = "𝐌𝐞𝐧𝐠𝐠𝐮𝐧𝐚𝐤𝐚𝐧 𝐏𝐇𝐏";

            $hasil = $teks1 . $teks2 . $teks3;
            printf("𝐇𝐀𝐒𝐈𝐋 : %s<br/>",$hasil);
            //hasil : Aku Sedang Belajar Pemrograman WEB 2 Menggunakan PHP
            $hasil = $teks1 . " " . $teks2 . " " . $teks3;
            echo "𝐇𝐀𝐒𝐈𝐋 : " . $hasil;
            //hasil : Aku Sedang Belajar Pemrograman WEB 2 Menggunakan PHP

?>