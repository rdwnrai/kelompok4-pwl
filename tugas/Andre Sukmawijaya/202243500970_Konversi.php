<!DOCTYPE html>
<html>
<head>
  <title>Latihan Form PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    h2 {
      color: #333;
      margin-top: 50px;
    }
    form {
      margin-bottom: 30px;
      padding: 15px;
      border: 1px solid #ccc;
      width: fit-content;
    }
    input[type=text], input[type=number], textarea, select {
      width: 200px;
      margin-bottom: 10px;
    }
    table {
      margin-top: 10px;
      border-collapse: collapse;
    }
    table td, table th {
      border: 1px solid black;
      padding: 5px 10px;
    }
  </style>
</head>
<body>
  
  <h2>Latihan 2: Konversi Nilai Angka ke Huruf</h2>
  <form method="POST">
    Masukkan Nilai: <input type="number" name="nilai">
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
    echo "Nilai Huruf: <strong>$huruf</strong>";
  }
  ?>

</body>
</html>