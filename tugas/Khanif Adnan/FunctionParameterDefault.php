<div class="content">
    <div>
        <div>
            <h3>Function Dengan Parameter Default</h3><br>

            <div>
                <p>Menambahkan parameter dalam sebuah function diantara ( ) dan menambahkan parameter default</p>

                <div>
                    <h3>Output:</h3><br>
                    <?php
                    function salam($nama = "PHP")
                    {
                        echo "Halo $nama<br>";
                    }

                    salam("Anthony Kiedis");
                    salam();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>