<?php include 'header.php'; ?>

<div class="flex min-h-screen">
    
    <?php include 'sidebar.php'; ?>
    
    <div class="flex-1 p-6 ml-0 md:ml-0">
        <div class="glass-dark rounded-2xl p-8 card-hover">
            <div class="text-white">
                <h2 class="text-primary-400 text-2xl font-semibold mb-6">LATIHAN FORM BIODATA</h2>
                <div class="bg-white/10 rounded-lg p-6">
                    <form action="" method="POST" class="space-y-4">
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Nama:</label>
                            <input type="text" name="nama" required class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Umur:</label>
                            <input type="number" name="umur" required class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                        </div>
                        
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Gender:</label>
                            <div class="space-x-4">
                                <label class="text-white"><input type="radio" name="gender" value="Pria" required class="mr-2"> Pria</label>
                                <label class="text-white"><input type="radio" name="gender" value="Wanita" required class="mr-2"> Wanita</label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Hobi:</label>
                            <div class="space-x-4">
                                <label class="text-white"><input type="checkbox" name="hobi[]" value="Travelling" class="mr-2"> Mancing</label>
                                <label class="text-white"><input type="checkbox" name="hobi[]" value="Shopping" class="mr-2"> Balapan</label>
                            </div>
                        </div>
                        
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Pendidikan:</label>
                            <select name="pendidikan" required class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D3">D3</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="text-primary-400 font-medium block mb-2">Alamat:</label>
                            <textarea name="alamat" rows="4" required class="w-full px-3 py-2 bg-white/20 rounded border border-white/30 text-white"></textarea>
                        </div>
                        
                        <button type="submit" class="px-6 py-2 bg-primary-400 text-white font-medium rounded hover:bg-primary-500">OK</button>
                    </form>
                    
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = htmlspecialchars($_POST['nama']);
                        $umur = (int)$_POST['umur'];
                        $gender = htmlspecialchars($_POST['gender']);
                        $hobi = isset($_POST['hobi']) ? implode(", ", array_map('htmlspecialchars', $_POST['hobi'])) : 'Tidak ada';
                        $pendidikan = htmlspecialchars($_POST['pendidikan']);
                        $alamat = htmlspecialchars($_POST['alamat']);

                        echo '<div class="mt-6 p-4 bg-green-500/20 rounded border border-green-400">';
                        echo '<h3 class="text-green-300 font-semibold mb-3">Data Biodata:</h3>';
                        echo "<p class='text-green-300'><strong>Nama:</strong> $nama</p>";
                        echo "<p class='text-green-300'><strong>Umur:</strong> $umur tahun</p>";
                        echo "<p class='text-green-300'><strong>Gender:</strong> $gender</p>";
                        echo "<p class='text-green-300'><strong>Hobi:</strong> $hobi</p>";
                        echo "<p class='text-green-300'><strong>Pendidikan:</strong> $pendidikan</p>";
                        echo "<p class='text-green-300'><strong>Alamat:</strong> $alamat</p>";
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>