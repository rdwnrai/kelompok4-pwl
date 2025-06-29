<?php

$murid = new \stdClass;
            $murid->nama = "𝐓𝐔𝐒𝐔𝐊 𝐆𝐈𝐆𝐈";
            $murid->usia = 133;
            $murid->hobi = array("𝐓𝐈𝐃𝐔𝐑 𝐒𝐀𝐌𝐁𝐈𝐋 𝐍𝐀𝐈𝐊 𝐌𝐎𝐓𝐎𝐑", "𝐌𝐀𝐍𝐃𝐈 𝐒𝐀𝐌𝐁𝐈𝐋 𝐌𝐀𝐊𝐀𝐍");

            echo "$murid->nama 𝐁𝐄𝐑𝐔𝐒𝐈𝐀 $murid->usia 𝐓𝐀𝐇𝐔𝐍 <br/>";

            // TUSUK GIGI berusia 133 tahun

            echo "𝐇𝐎𝐁𝐈𝐍𝐘𝐀 : ";
            echo $murid->hobi[0];
            echo " 𝐃𝐀𝐍 ";
            echo $murid->hobi[1];
            // Hobinya : TIDUR SAMBIL MOTORAN, MANDI SAMBIL MAKAN

?>