<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">OPERATOR ARITMATIKA</h2>
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                        $bil1 = 22;
                        $bil2 = 16;

                        $hasil = $bil1 + $bil2;
                        echo "<p class='text-white mb-2'>$bil1 + $bil2 = $hasil</p>";

                        $hasil = $bil1 - $bil2;
                        echo "<p class='text-white mb-2'>$bil1 - $bil2 = $hasil</p>";

                        $hasil = $bil1 * $bil2;
                        echo "<p class='text-white mb-2'>$bil1 x $bil2 = $hasil</p>";

                        $hasil = $bil1 / $bil2;
                        echo "<p class='text-white mb-2'>$bil1 / $bil2 = $hasil</p>";

                        $hasil = $bil1 % $bil2;
                        echo "<p class='text-white mb-2'>$bil1 % $bil2 = $hasil</p>";

                        $hasil = $bil1++;
                        echo "<p class='text-white mb-2'>$bil1++ = $hasil</p>";

                        $hasil = $bil2++;
                        echo "<p class='text-white mb-2'>$bil2++ = $hasil</p>";
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>