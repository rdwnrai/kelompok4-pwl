<?php
include "cek_login.php";
include "config.php";

// Fungsi untuk menampilkan pesan (alert)
function show_alert($message, $type = 'success') {
    $_SESSION['alert_message'] = $message;
    $_SESSION['alert_type'] = $type;
}

// Proses penyimpanan transaksi
if (isset($_POST['simpan'])) {
    $produk_arr = $_POST['produk'];
    $jumlah_arr = $_POST['jumlah'];
    $customer_name_input = isset($_POST['nama_pembeli']) ? htmlspecialchars(trim($_POST['nama_pembeli'])) : 'Pembeli Umum';

    $transaction_group_id = 'TRX-' . date('YmdHis') . '-' . uniqid();

    mysqli_begin_transaction($conn);

    $produk_data_query = mysqli_query($conn, "SELECT id, nama_produk, harga, stok FROM produk");
    $produk_lookup = [];
    while ($p = mysqli_fetch_assoc($produk_data_query)) {
        $produk_lookup[$p['id']] = $p;
    }

    $total_harga_transaksi_keseluruhan = 0;
    $has_error = false;
    $items_processed = 0;

    $stmt_transaksi = mysqli_prepare($conn, "INSERT INTO transaksi (tanggal, nama_pembeli, id_produk, jumlah, total_harga, id_transaksi_group) VALUES (CURDATE(), ?, ?, ?, ?, ?)");
    $stmt_update_stok = mysqli_prepare($conn, "UPDATE produk SET stok = stok - ? WHERE id = ?");

    if (!$stmt_transaksi || !$stmt_update_stok) {
        show_alert("Gagal menyiapkan query database: " . mysqli_error($conn), "danger");
        $has_error = true;
    } else {
        foreach ($produk_arr as $i => $produk_id) {
            $jumlah = (int)$jumlah_arr[$i];

            if ($produk_id && $jumlah > 0 && isset($produk_lookup[$produk_id])) {
                $produk_info = $produk_lookup[$produk_id];
                $harga = $produk_info['harga'];
                $nama_produk = $produk_info['nama_produk'];
                $stok_saat_ini = $produk_info['stok'];

                if ($jumlah > $stok_saat_ini) {
                    show_alert("Stok '$nama_produk' tidak cukup. Tersedia: $stok_saat_ini, Diminta: $jumlah", "warning");
                    $has_error = true;
                    continue;
                }

                $total_item = $harga * $jumlah;

                mysqli_stmt_bind_param($stmt_transaksi, "ssids",
                    $customer_name_input,
                    $produk_id,
                    $jumlah,
                    $total_item,
                    $transaction_group_id
                );
                if (!mysqli_stmt_execute($stmt_transaksi)) {
                    show_alert("Gagal menyimpan transaksi untuk produk '$nama_produk': " . mysqli_error($conn), "danger");
                    $has_error = true;
                    break;
                }

                mysqli_stmt_bind_param($stmt_update_stok, "ii", $jumlah, $produk_id);
                if (!mysqli_stmt_execute($stmt_update_stok)) {
                    show_alert("Gagal mengupdate stok untuk produk '$nama_produk': " . mysqli_error($conn), "danger");
                    $has_error = true;
                    break;
                }

                $total_harga_transaksi_keseluruhan += $total_item;
                $items_processed++;
            } else if ($produk_id && $jumlah <= 0) {
                show_alert("Jumlah produk tidak boleh nol atau negatif.", "warning");
                $has_error = true;
            }
        }
        mysqli_stmt_close($stmt_transaksi);
        mysqli_stmt_close($stmt_update_stok);
    }

    if ($has_error || $items_processed === 0) {
        mysqli_rollback($conn);
        if ($items_processed === 0) {
            show_alert("Transaksi gagal total atau tidak ada produk valid yang diproses.", "danger");
        }
    } else {
        mysqli_commit($conn);
        show_alert("Transaksi berhasil disimpan! Total: Rp " . number_format($total_harga_transaksi_keseluruhan, 0, ',', '.') . ". Anda bisa melihat detail di Riwayat Transaksi.", "success");
    }
}

// Ambil daftar produk untuk dropdown (tanpa stok)
$produk_list = mysqli_query($conn, "SELECT id, nama_produk FROM produk WHERE stok > 0 ORDER BY nama_produk ASC");
$produk_options = "<option value=''>Pilih Produk</option>";
while ($p = mysqli_fetch_assoc($produk_list)) {
    $produk_options .= "<option value='{$p['id']}'>{$p['nama_produk']}</option>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/transaksi.css">
</head>
<body>

    <h2>Input Transaksi</h2>

    <?php if (isset($_SESSION['alert_message'])): ?>
        <div class="alert alert-<?= $_SESSION['alert_type'] ?> alert-dismissible fade show alert-custom" role="alert">
            <?php
                if ($_SESSION['alert_type'] == 'success') echo '<i class="fas fa-check-circle"></i> ';
                else if ($_SESSION['alert_type'] == 'danger') echo '<i class="fas fa-exclamation-triangle"></i> ';
                else if ($_SESSION['alert_type'] == 'info' || $_SESSION['alert_type'] == 'warning') echo '<i class="fas fa-info-circle"></i> ';
            ?>
            <?= $_SESSION['alert_message'] ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php unset($_SESSION['alert_message']); unset($_SESSION['alert_type']); ?>
    <?php endif; ?>

    <div class="container-wrapper">
        <div class="form-card">
            <form method="post">
                <div class="mb-3 input-group nama-pembeli">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input type="text" name="nama_pembeli" class="form-control" placeholder="Nama Pembeli (Opsional)" aria-label="Nama Pembeli">
                </div>

                <div id="produk-container">
                    <div class="produk-row">
                        <select name="produk[]" class="form-select" required>
                            <?= $produk_options ?>
                        </select>
                        <input type="number" name="jumlah[]" class="form-control" placeholder="Jumlah" min="1" required>
                        <button type="button" onclick="removeRow(this)">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="form-controls">
                    <button type="button" class="btn btn-tambah-produk">
                        <i class="fas fa-plus"></i> Tambah Produk
                    </button>
                    <button type="submit" name="simpan" class="btn btn-simpan-transaksi">
                        <i class="fas fa-save"></i> Simpan Transaksi
                    </button>
                    <a href="dashboard.php" class="btn btn-dashboard-back">
                        <i class="fas fa-arrow-left"></i> Dashboard
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- inisialisasi javascript -->
    <script>
        window.produkOptionsHTML = `
            <select name="produk[]" class="form-select" required>
                <?= $produk_options ?>
            </select>
            <input type="number" name="jumlah[]" class="form-control" placeholder="Jumlah" min="1" required>
            <button type="button" onclick="removeRow(this)">
                <i class="fas fa-trash-alt"></i>
            </button>
        `;
    </script>
    <script src="js/transaksi.js"></script>
</body>
</html>
