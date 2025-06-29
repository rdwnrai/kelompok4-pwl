<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <h2 class="text-3xl font-bold gradient-text mb-8">Biodata Saya</h2>
            
            <div class="glass-effect rounded-lg p-6 border border-white/20 flex flex-col md:flex-row items-center">
                <div class="mb-6 md:mb-0 md:mr-8">
                    <img src="yusuf.jpeg" alt="Foto yusuf" class="w-40 h-40 object-cover rounded-full border-4 border-primary-400 shadow-lg">
                </div>

                <div class="text-white">
                    <h3 class="text-xl font-semibold text-primary-400 mb-6">Informasi Pribadi</h3>
                    <div class="space-y-3 text-lg">
                        <p><span class="text-secondary-400 font-medium">Nama:</span> Maulana Yusuf</p>
                        <p><span class="text-secondary-400 font-medium">NPM:</span> 202243500894</p>
                        <p><span class="text-secondary-400 font-medium">Kelas:</span> S6F</p>
                        <p><span class="text-secondary-400 font-medium">Hobi:</span> Mancing</p>
                        <p><span class="text-secondary-400 font-medium">Cita-cita:</span> jadi MC mancing Mania Mantap</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>