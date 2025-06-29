<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-2xl text-primary-400 font-semibold mb-6">FUNCTION DENGAN PARAMETER</h2>

                <div class="bg-white/10 rounded-lg p-4">
                    <h3 class="text-primary-400 font-semibold mb-4">Output:</h3>
                    <div class="text-gray-200">
                        <?php
                        function salam($nama) {
                            echo "Halo $nama<br>";
                        }
                        
                        salam("Ujan Pancing");
                        salam("Nirman Pelet");
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>