<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biodata Diri</title>
  <link rel="stylesheet" href="css/biodata.css">
</head>
<body>

<div class="container">
  <h2>Biodata Diri</h2>

  <div class="photo">
    <img src="febrian.jpg" alt="Foto Profil">
  </div>

  <?php
    $nama = "Febrian Riski Adi Santoso";
    $npm = "202243500914";
    $ttl = "Ngawi, 2 februari 2002";
    $alamat = "Jl.haji riyan No. 104, Bekasi";
    $hobi = "Lari, Gaming, dan Gym";
    $email = "febrianriski222@gmail.com";

  ?>

  <table>
    <tr>
      <td class="label">Nama</td>
      <td class="separator">:</td>
      <td class="value"><?php echo $nama; ?></td>
    </tr>
    <tr>
      <td class="label">NPM</td>
      <td class="separator">:</td>
      <td class="value"><?php echo $npm; ?></td>
    </tr>
    <tr>
      <td class="label">Tempat, Tanggal Lahir</td>
      <td class="separator">:</td>
      <td class="value"><?php echo $ttl; ?></td>
    </tr>
    <tr>
      <td class="label">Alamat</td>
      <td class="separator">:</td>
      <td class="value"><?php echo $alamat; ?></td>
    </tr>
    <tr>
      <td class="label">Hobi</td>
      <td class="separator">:</td>
      <td class="value"><?php echo $hobi; ?></td>
    </tr>
    <tr>
      <td class="label">Email</td>
      <td class="separator">:</td>
      <td class="value"><?php echo $email; ?></td>
    </tr>
  </table>
</div>

</body>
</html>
