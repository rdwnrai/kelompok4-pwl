<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title> Call by Reference</title>
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
        
        function hitung_kuadrat(&$angka) {
            $angka = $angka * $angka; 
        }

       
        $nilai = 5;

       
        echo "<p>Nilai sebelum dihitung kuadrat: $nilai</p>";

        
        hitung_kuadrat($nilai);

       
        echo "<p>Nilai setelah dihitung kuadrat: $nilai</p>";
    ?>

</body>
</html>
