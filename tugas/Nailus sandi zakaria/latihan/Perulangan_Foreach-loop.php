        <div class="content">
          <?php
              $list_hari = array(
                "Senin",
                "Selasa",
                "Rabu",
                "Kamis",
                "Jumat",
                "Sabtu",
                "Minggu"
              );
              foreach($list_hari as $hari)
              {
                echo $hari . "," ;
              }
          ?>