<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">OPERATOR STRING</h2>
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                        $teks1 = "Aku Sedang Belajar";
                        $teks2 = "Pemrograman WEB 2";
                        $teks3 = "Menggunakan PHP";

                        $hasil = $teks1 . $teks2 . $teks3;
                        printf("<p class='text-white mb-2'>hasil : %s</p>", $hasil);

                        $hasil = $teks1 . " " . $teks2 . " " . $teks3;
                        echo "<p class='text-white mb-2'>hasil : " . $hasil . "</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>