<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">FORM KONVERSI ANGKA MENJADI PREDIKAT</h2>
                <div class="bg-white/10 rounded-lg p-6">
                    <div class="mb-6">
                        <h3 class="text-primary-400 font-medium mb-3">Kriteria Nilai:</h3>
                        <div class="bg-white/5 rounded p-4">
                            <table class="w-full text-white">
                                <thead>
                                    <tr class="border-b border-white/20">
                                        <th class="text-left py-2 text-primary-400">Rentang Nilai</th>
                                        <th class="text-left py-2 text-primary-400">Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td class="py-1">85 - 100</td><td class="py-1">A</td></tr>
                                    <tr><td class="py-1">70 - 84</td><td class="py-1">B</td></tr>
                                    <tr><td class="py-1">60 - 69</td><td class="py-1">C</td></tr>
                                    <tr><td class="py-1">50 - 59</td><td class="py-1">D</td></tr>
                                    <tr><td class="py-1">&lt; 50</td><td class="py-1">E</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <form method="post" action="" class="space-y-4">
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Masukkan Nilai Angka (0-100):</label>
                            <input type="number" name="nilai" required min="0" max="100" placeholder="Nilai" class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        <button type="submit" class="px-6 py-2 bg-primary-400 text-white font-medium rounded hover:bg-primary-500">Konversi</button>
                    </form>
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nilai = (int)$_POST['nilai'];
                        $huruf = '';

                        if ($nilai >= 85 && $nilai <= 100) {
                            $huruf = 'A';
                        } elseif ($nilai >= 70 && $nilai <= 84) {
                            $huruf = 'B';
                        } elseif ($nilai >= 60 && $nilai < 70) {
                            $huruf = 'C';
                        } elseif ($nilai >= 50 && $nilai < 60) {
                            $huruf = 'D';
                        } elseif ($nilai < 50) {
                            $huruf = 'E';
                        }

                        echo '<div class="mt-6 p-4 bg-green-500/20 rounded border border-green-400">';
                        echo '<h3 class="text-green-300 font-semibold mb-3">Hasil Konversi:</h3>';
                        echo "<p class='text-green-300 text-xl'>Nilai: $nilai</p>";
                        echo "<p class='text-green-300 text-xl'>Grade: <span class='text-primary-400 font-bold'>$huruf</span></p>";
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>