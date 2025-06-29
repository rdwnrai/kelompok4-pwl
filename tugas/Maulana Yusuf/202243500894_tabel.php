<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">LATIHAN TABEL</h2>
                <div class="bg-white/10 rounded-lg p-6">
                    <form method="post" action="" class="space-y-4">
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Jumlah Baris:</label>
                            <input type="number" name="baris" required min="1" placeholder="baris" class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Jumlah Kolom:</label>
                            <input type="number" name="kolom" required min="1" placeholder="kolom" class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        <button type="submit" class="px-6 py-2 bg-primary-400 text-white font-medium rounded hover:bg-primary-500">Tampilkan Tabel</button>
                    </form>
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $baris = (int)$_POST['baris'];
                        $kolom = (int)$_POST['kolom'];
                        $jumlah = $baris * $kolom;

                        echo '<div class="mt-6 p-4 bg-green-500/20 rounded border border-green-400">';
                        echo '<h3 class="text-green-300 font-semibold mb-3">HASIL TABEL</h3>';
                        echo "<h4 class='text-primary-400 mb-4'>Tabel $baris x $kolom</h4>";
                        echo '<div class="overflow-x-auto">';
                        echo '<table class="min-w-full border-collapse border border-white/30">';
                        
                        for ($i = 1; $i <= $baris; $i++) {
                            echo '<tr>';
                            for ($j = 1; $j <= $kolom; $j++) {
                                echo '<td class="border border-white/30 p-3 text-center text-white">';
                                echo "Baris ke-$i<br>Kolom ke-$j";
                                echo '</td>';
                            }
                            echo '</tr>';
                        }
                        
                        echo '</table>';
                        echo '</div>';
                        echo "<p class='mt-4 text-green-300'>Jumlah total sel: <strong class='text-primary-400'>$jumlah</strong></p>";
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>