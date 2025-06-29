<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">OPERATOR PERBANDINGAN</h2>
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                        $bil1 = 96;
                        $bil2 = 77;
                        $teks1 = "PHP";
                        $teks2 = "java Script";

                        printf("<p class='text-white mb-2'>%d == %d hasilnya %d</p>", $bil1, $bil2, $bil1 == $bil2);
                        printf("<p class='text-white mb-2'>%d != %d hasilnya %d</p>", $bil1, $bil2, $bil1 != $bil2);
                        printf("<p class='text-white mb-2'>%d >= %d hasilnya %d</p>", $bil1, $bil2, $bil1 >= $bil2);
                        printf("<p class='text-white mb-2'>%s == %s hasilnya %d</p>", $teks1, $teks2, $teks1 == $teks2);
                        printf("<p class='text-white mb-2'>%s != %s hasilnya %d</p>", $teks1, $teks2, $teks1 != $teks2);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>