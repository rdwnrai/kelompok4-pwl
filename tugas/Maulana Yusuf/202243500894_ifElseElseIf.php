<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">IF ELSE IF Statement</h2>
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                        $hari = 6;
                        if ($hari == 1) echo '<p class="text-primary-400 text-xl font-semibold">Senin</p>';
                        elseif ($hari == 2) echo '<p class="text-primary-400 text-xl font-semibold">Selasa</p>';
                        elseif ($hari == 3) echo '<p class="text-primary-400 text-xl font-semibold">Rabu</p>';
                        elseif ($hari == 4) echo '<p class="text-primary-400 text-xl font-semibold">Kamis</p>';
                        elseif ($hari == 5) echo '<p class="text-primary-400 text-xl font-semibold">Jumat</p>';
                        elseif ($hari == 6) echo '<p class="text-primary-400 text-xl font-semibold">Sabtu</p>';
                        elseif ($hari == 7) echo '<p class="text-primary-400 text-xl font-semibold">Minggu</p>';
                        else echo '<p class="text-red-400 text-xl font-semibold">Salah kode hari</p>';
                    ?>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>