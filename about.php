<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>About - Tugas Individu</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons (optional for avatar/icon) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/about.css">
</head>
<body>

<div class="container py-5">
  <h1 class="section-title"> Daftar Tugas Individu</h1>

  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
    <?php
      $anggota = [
        'Febrian Riski' => 'Febrian Riski Adi Santoso',
        'Khanif Adnan' => 'Khanif Adnan',
        'Maulana Yusuf' => 'Maulana Yusuf',
        'Nailus sandi zakaria' => 'Nailus sandi zakaria',
        'Muhammad Ridhwan Raihan' => 'Muhammad Ridhwan Raihan',
        'Ervindo Hasugian' => 'Ervindo Hasugian',
        'Andre Sukmawijaya' => 'Andre Sukmawijaya',
        'muhammad iman rasyid' => 'muhammad iman rasyid'
      ];

      foreach ($anggota as $nama => $folder):
        $inisial = strtoupper(substr($nama, 0, 1));
    ?>
    <div class="col">
      <div class="card text-center p-3 h-100">
        <div class="card-body d-flex flex-column">
          <h5 class="card-title mb-1"><?= $nama ?></h5>
          <p class="card-text text-muted small mb-3">Tugas individu dari <?= explode(" ", $nama)[0] ?>.</p>
          <a href="tugas/<?= $folder ?>/" target="_blank" class="btn btn-primary mt-auto">
            <i class="bi bi-folder2-open"></i> Buka Tugas
          </a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
