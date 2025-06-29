<div class="content">
    
    <div>
        <h2>Function Call By Reff</h2>
        
        <div>
            <h3>Suatu function juga dapat mengembalikan suatu nilai (return value)<br>
            Nilai yang dikembalian dapat berupa suatu bilangan (bulat, real), string, maupun array, dll<br>
            Kita dapat merubah nilai dari parameter menggunakan ( & ) </h3>
          
            <div>
                <h3>Output:</h3>
                <?php
                  function nilaiKuadrat(&$nilai) {
                    $nilai = $nilai * $nilai;
                  }
                  
                  $bil = 3;
                  echo "Nilai = " . $bil;
                  
                  nilaiKuadrat($bil);
                  echo "<br>Nilai = " . $bil;
                ?>
            </div>
        </div>
    </div>
</div>
