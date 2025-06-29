<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Penjumlahan dengan Call by Value</title>
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

    <?php
        
        function penjumlahan($a, $b) {
            $hasil = $a + $b;
            echo "<p>Hasil penjumlahan $a + $b = $hasil</p>";
        }

        
        $angka1 = 10;
        $angka2 = 20;

        
        penjumlahan($angka1, $angka2);

       
        echo "<p>Nilai asli angka1 setelah fungsi: $angka1</p>";
        echo "<p>Nilai asli angka2 setelah fungsi: $angka2</p>";
    ?>

</body>
</html>
