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
  <h2>Latihan 3: Membuat Tabel Dinamis</h2>
  <form method="POST">
    Jumlah Baris: <input type="number" name="baris"><br>
    Jumlah Kolom: <input type="number" name="kolom"><br>
    <input type="submit" name="buat_tabel" value="Create Table">
  </form>
  <?php
  if (isset($_POST['buat_tabel'])) {
    $baris = $_POST['baris'];
    $kolom = $_POST['kolom'];
    echo "<h3>Hasil Tabel:</h3>";
    echo "<table>";
    for ($i = 1; $i <= $baris; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= $kolom; $j++) {
        echo "<td>baris $i , kolom $j</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  ?>
  </body>
  </html>