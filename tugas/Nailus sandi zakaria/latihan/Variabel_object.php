        <div class="content">
          <?php
              $murid =new \stdClass;
              $murid->nama ="zaka";
              $murid->usia = 22;
              $murid->hobi = array("Nonton Film ", " Main game ", "Mendaki");

              echo "$murid->nama berusia $murid->usia tahun <br/>";

              echo "Hobinya : ";
              echo  $murid->hobi[0];
              echo " , ";
              echo  $murid->hobi[1];
              echo " dan ";
              echo  $murid->hobi[2];
           ?>