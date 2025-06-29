<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">FORM METHOD POST ACTION TERPISAH</h2>
                <div class="bg-white/10 rounded-lg p-6">
                    <form action="202243500894_actionPost.php" method="POST" class="space-y-4">
                        <div>
                            <label class="text-primary-400 font-medium">Nama:</label>
                            <input type="text" name="nama" class="ml-3 px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        <div>
                            <label class="text-primary-400 font-medium">Umur:</label>
                            <input type="text" name="umur" class="ml-3 px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        <input type="submit" name="ok" value="OK" class="px-6 py-2 bg-primary-400 text-white font-medium rounded hover:bg-primary-500 cursor-pointer">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>