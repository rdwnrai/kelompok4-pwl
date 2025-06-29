<div class="content">

    <div>
        <div>
            <h2>Function Call By Value</h2>

            <div>
                <h3>Suatu function juga dapat mengembalikan suatu nilai (return value)<br>
                    Nilai yang dikembalian dapat berupa suatu bilangan (bulat, real), string, maupun array, dll</h3>

                <div>
                    <h3>Output:</h3>
                    <?php
                    function jumlahkan($x, $y)
                    {
                        $hasil = $x + $y;
                        return $hasil;
                    }

                    echo "Hasilnya = " . jumlahkan(10, 2);
                    $bil = 0;
                    $bil = jumlahkan(9, 9);
                    echo "<br> Hasilnya = $bil";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>