<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai Angka ke Huruf</title>
</head>
<body>
<style>
        .centered {
           position: absolute;
           top: 50%;
           left: 50%;
           transform: translate(-50%, -50%);
           text-align: center;
}
    </style>
    
<div class="centered">
    
    <h2>Form Konversi Nilai</h2>
    <form method="POST" action="">
        Masukkan Nilai Angka: <input type="number" name="nilai" required>
        <input type="submit" name="submit" value="Konversi">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nilai = $_POST['nilai'];
        $huruf = "";

        if ($nilai >= 85 && $nilai <= 100) {
            $huruf = "A";
        } elseif ($nilai >= 70 && $nilai <= 84) {
            $huruf = "B";
        } elseif ($nilai >= 60 && $nilai < 70) {
            $huruf = "C";
        } elseif ($nilai >= 50 && $nilai < 60) {
            $huruf = "D";
        } elseif ($nilai < 50 && $nilai >= 0) {
            $huruf = "E";
        } else {
            $huruf = "Nilai tidak valid (harus 0 - 100)";
        }

        echo "<h3>Hasil Konversi:</h3>";
        echo "<p>Nilai Huruf: <strong style='color:red;'>$huruf</strong></p>";
    }
    ?>
</body>
</html>
