<div>
    <h3>Soal 3</h3>
    <h2>Membuat Tabel</h2>
    <h3>Masukkan jumlah baris dan kolom untuk membuat tabel</h3>

    <form method="POST" style="margin-bottom: 20px;">
        <div style="margin-bottom: 10px;">
            <label for="baris">Jumlah Baris :</label>
            <input type="number" name="baris" id="baris" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="kolom">Jumlah Kolom :</label>
            <input type="number" name="kolom" id="kolom" required>
        </div>
        <input type="submit" name="buat_tabel" value="Create" style="margin-top: 10px;">
    </form>

    <?php
    if (isset($_POST['buat_tabel'])) {
        $baris = (int) $_POST['baris'];
        $kolom = (int) $_POST['kolom'];

        echo "<h3 style='margin-top: 30px;'>Tabel Hasil:</h3>";
        echo "<div style='margin-top: 15px;'>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        for ($i = 1; $i <= $baris; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $kolom; $j++) {
                echo "<td>Baris $i , Kolom $j</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
</div>