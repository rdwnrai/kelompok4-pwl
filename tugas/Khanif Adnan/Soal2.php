<div class="content">
    <h2>Soal 2 : Konversi Nilai ke Huruf</h2>
    <form method="POST">
        <label>Masukkan Nilai :</label>
        <input type="number" name="nilai" min="0" max="100" required>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        if ($nilai >= 85 && $nilai <= 100) {
            $huruf = "A";
        } elseif ($nilai >= 70) {
            $huruf = "B";
        } elseif ($nilai >= 60) {
            $huruf = "C";
        } elseif ($nilai >= 50) {
            $huruf = "D";
        } else {
            $huruf = "E";
        }
        echo "<div class='result'>Nilai Huruf : $huruf</div>";
    }
    ?>
</div>