<?php
include "cek_login.php";
include "config.php";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    mysqli_query($conn, "INSERT INTO produk (nama_produk, harga, stok) VALUES ('$nama', '$harga', '$stok')");
    header("Location: master_data_produk.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/produk_input.css">
</head>
<body>

    <div class="custom-card"> <h2>Tambah Produk</h2>
        <form method="post">
            <div class="mb-3"> <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga (Rp)</label>
                <input type="number" name="harga" id="harga" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" name="stok" id="stok" class="form-control" required>
            </div>

            <button type="submit" name="simpan" class="btn btn-primary w-100 mt-4"> <i class="fas fa-save me-2"></i> Simpan Produk
            </button>
        </form>

        <div class="d-flex justify-content-between mt-4"> <a href="master_data_produk.php" class="btn btn-custom-produk">
                <i class="fa-solid fa-box-open me-2"></i> Daftar Produk
            </a>

            <a href="dashboard.php" class="btn btn-custom-dashboard">
                <i class="fas fa-arrow-left me-2"></i> Dashboard
            </a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>