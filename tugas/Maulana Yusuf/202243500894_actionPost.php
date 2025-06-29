<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">HASIL METHOD POST</h2>
                <div class="bg-white/10 rounded-lg p-6">
                    <?php
                    if (isset($_POST["ok"])) {
                        echo '<div class="mt-4 p-4 bg-green-500/20 rounded border border-green-400">';
                        echo '<p class="text-green-300">Nama: ' . htmlspecialchars($_POST["nama"]) . '</p>';
                        echo '<p class="text-green-300">Umur: ' . htmlspecialchars($_POST["umur"]) . '</p>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>