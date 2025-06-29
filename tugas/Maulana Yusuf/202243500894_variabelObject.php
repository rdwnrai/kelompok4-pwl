<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                    $murid = new \stdClass;
                    $murid->nama = "Asep Karbu";
                    $murid->usia = 22;
                    $murid->hobi = array("Nyeting Motor","Balapan");

                    echo "$murid->nama berusia $murid->usia tahun <br/>";

                    echo "Hobinya : ";
                    echo $murid->hobi[0];
                    echo " dan ";
                    echo $murid->hobi[1];
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>