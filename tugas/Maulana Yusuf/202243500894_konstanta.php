<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                    define('JUDUL','Hitung Luas Lingkaran');
                    define("PHI", 3.14);

                    echo JUDUL;

                    $r=10;
                    echo "<br>Jari-jari : $r<br>";
                    
                    $luas = PHI * $r * $r;
                    echo "Luas Lingkaran = $luas";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>