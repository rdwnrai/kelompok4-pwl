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

  <h2>Form Biodata</h2>
  <form method="POST">
    Nama: <br><input type="text" name="nama"><br>
    Umur: <br><input type="text" name="umur"><br>
    Gender:<br>
    <input type="radio" name="gender" value="Pria">Pria
    <input type="radio" name="gender" value="Wanita">Wanita<br>
    Hobi:<br>
    <input type="checkbox" name="hobi[]" value="Traveling">Traveling
    <input type="checkbox" name="hobi[]" value="Shopping">Shopping<br>
    Pendidikan:<br>
    <select name="pendidikan">
      <option value="SD">SD</option>
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="S1">S1</option>
    </select><br>
    Alamat:<br>
    <textarea name="alamat"></textarea><br>
    <input type="submit" name="submit_biodata" value="Submit Biodata">
  </form>

  <?php
  if (isset($_POST['submit_biodata'])) {
    echo "<h3>Output Biodata:</h3>";
    echo "Nama: " . $_POST['nama'] . "<br>";
    echo "Umur: " . $_POST['umur'] . "<br>";
    echo "Gender: " . $_POST['gender'] . "<br>";
    echo "Hobi: " . implode(", ", $_POST['hobi']) . "<br>";
    echo "Pendidikan: " . $_POST['pendidikan'] . "<br>";
    echo "Alamat: " . $_POST['alamat'] . "<br>";
  }
  ?>
  </body>
  </html>