<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">SWITCH CASE Statement</h2>
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                        $bulan = 5;
                        switch ($bulan) {
                            case 1: echo '<p class="text-primary-400 text-xl font-semibold">Januari</p>'; break;
                            case 2: echo '<p class="text-primary-400 text-xl font-semibold">Februari</p>'; break;
                            case 3: echo '<p class="text-primary-400 text-xl font-semibold">Maret</p>'; break;
                            case 4: echo '<p class="text-primary-400 text-xl font-semibold">April</p>'; break;
                            case 5: echo '<p class="text-primary-400 text-xl font-semibold">Mei</p>'; break;
                            case 6: echo '<p class="text-primary-400 text-xl font-semibold">Juni</p>'; break;
                            case 7: echo '<p class="text-primary-400 text-xl font-semibold">Juli</p>'; break;
                            case 8: echo '<p class="text-primary-400 text-xl font-semibold">Agustus</p>'; break;
                            case 9: echo '<p class="text-primary-400 text-xl font-semibold">September</p>'; break;
                            case 10: echo '<p class="text-primary-400 text-xl font-semibold">Oktober</p>'; break;
                            case 11: echo '<p class="text-primary-400 text-xl font-semibold">November</p>'; break;
                            case 12: echo '<p class="text-primary-400 text-xl font-semibold">Desember</p>'; break;
                        }
                    ?>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>