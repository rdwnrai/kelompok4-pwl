<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">WHILE LOOP</h2>
                <div class="bg-white/10 rounded-lg p-4">
                    <?php
                        $i = 0;
                        echo '<p class="text-primary-400 text-xl font-semibold">';
                        while ($i < 10) {
                            echo $i . ' ';
                            $i++;
                        }
                        echo '</p>';
                    ?>
                </div> 
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>