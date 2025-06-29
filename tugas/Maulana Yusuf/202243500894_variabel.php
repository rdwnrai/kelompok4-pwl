<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                    $nama = "Maulana Yusuf";
                    $usia = 22;
                    $hobi = array("Ngoding","Mancing");
                    echo "Nama: " . $nama;
                    echo "<br>";
                    echo "Umur: " . $usia . " tahun";
                    echo "<br>";
                    echo "Hobby: $hobi[0], $hobi[1]";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>