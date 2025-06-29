<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/sidebar.css">
</head>
<body>

    <div class="sidebar">
        <div class="logo-container"></div>
        <img src="asset/group 21.png" alt="Logo" class="sidebar-logo" />
        <h2>Menu</h2>
        <a href="dashboard.php"><i class="fa-solid fa-house"></i>  Dashboard</a>
        <a href="master_data_produk.php"><i class="fa-solid fa-box"></i>  Data Produk</a>
        <a href="produk_input.php"><i class="fa-solid fa-box-open"></i>  Input Produk</a>
        <a href="transaksi.php"> <i class="fa-solid fa-cart-arrow-down"></i>  Transaksi</a>
        <a href="riwayat_transaksi.php"><i class="fa-solid fa-bookmark"></i>   riwayat transaksi</a>
        <a href="laporan.php"><i class="fa-solid fa-book"></i>   Laporan</a>
        <a href="about.php"><i class="fa-solid fa-users"></i>  Tentang</a>
      

        <a href="#" class="btn btn-link text-white" data-bs-toggle="modal" data-bs-target="#konfirmasiLogoutModal">
            <i class="fa-solid fa-sign-out-alt"></i> Log Out
        </a>
    </div>

    <div class="modal fade" id="konfirmasiLogoutModal" tabindex="-1" aria-labelledby="konfirmasiLogoutModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="konfirmasiLogoutModalLabel">Konfirmasi Log Out</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin keluar dari akun ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batalkan</button>
            <a href="logout.php" class="btn btn-danger">Log Out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX5w4c1" crossorigin="anonymous"></script>

    </body>
</html>