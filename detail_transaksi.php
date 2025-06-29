<?php
include "cek_login.php"; 
include "config.php";   

// Mengambil ID grup transaksi dari URL
$transaction_group_id = isset($_GET['id_transaksi']) ? $_GET['id_transaksi'] : '';

$transaction_header_info = []; //  menyimpan info umum transaksi (nama pembeli, tanggal, total)
$transaction_details = [];     // menyimpan detail item

if (empty($transaction_group_id)) {
    // Jika tidak ada ID transaksi di URL, tampilkan pesan error atau redirect
    echo "<!DOCTYPE html><html><head><title>Error</title>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>";
    echo "<style>body{display:flex; justify-content:center; align-items:center; min-height:100vh; background-color:#f8f9fa;} .alert{font-size:1.2rem;}</style>";
    echo "</head><body><div class='alert alert-danger'>ID Transaksi tidak ditemukan!</div></body></html>";
    exit;
}

// Ambil detail transaksi berdasarkan id_transaksi_group
$stmt = mysqli_prepare($conn, "SELECT 
                                    t.tanggal, 
                                    t.nama_pembeli, 
                                    p.nama_produk, 
                                    t.jumlah, 
                                    p.harga AS harga_satuan, 
                                    t.total_harga 
                                FROM 
                                    transaksi t
                                JOIN 
                                    produk p ON t.id_produk = p.id
                                WHERE 
                                    t.id_transaksi_group = ? 
                                ORDER BY 
                                    t.id ASC"); // Order by ID transaksi untuk urutan item

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $transaction_group_id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    $grand_total = 0;
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Ambil info header dari baris pertama aja, soalnya nama_pembeli & tanggal pasti sama di semua baris.
            if (empty($transaction_header_info)) {
                $transaction_header_info = [
                    'tanggal' => $row['tanggal'],
                    'nama_pembeli' => $row['nama_pembeli']
                ];
            }
            $transaction_details[] = $row;
            $grand_total += $row['total_harga'];
        }
        $transaction_header_info['grand_total'] = $grand_total;
    } else {
        // Jika tidak ada data ditemukan untuk ID transaksi ini
        echo "<!DOCTYPE html><html><head><title>Transaksi Tidak Ditemukan</title>";
        echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>";
        echo "<style>body{display:flex; justify-content:center; align-items:center; min-height:100vh; background-color:#f8f9fa;} .alert{font-size:1.2rem;}</style>";
        echo "</head><body><div class='alert alert-warning'>Detail transaksi tidak ditemukan untuk ID: " . htmlspecialchars($transaction_group_id) . "</div></body></html>";
        exit;
    }
    mysqli_stmt_close($stmt);
} else {
    // Error saat menyiapkan statement
    echo "<!DOCTYPE html><html><head><title>Error Database</title>";
    echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'>";
    echo "<style>body{display:flex; justify-content:center; align-items:center; min-height:100vh; background-color:#f8f9fa;} .alert{font-size:1.2rem;}</style>";
    echo "</head><body><div class='alert alert-danger'>Terjadi kesalahan database: " . mysqli_error($conn) . "</div></body></html>";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resi Transaksi #<?= htmlspecialchars($transaction_group_id) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/detail_transaksi.css">
</head>
<body>

    <div class="receipt-container">
        <div class="receipt-header">
            <h4>TOKO BONCELLA</h4>
            <p>Jl. Hj. Riyan No. 80, Kota Bekasi</p>
            <p>Telp: (021) 1234 5678 | Email: info@tokoboncella.com</p>
        </div>

        <div class="receipt-info">
            <p><strong>ID Transaksi:</strong> <?= htmlspecialchars($transaction_group_id) ?></p>
            <p><strong>Tanggal:</strong> <?= date('d F Y', strtotime($transaction_header_info['tanggal'])) ?></p>
            <p><strong>Pembeli:</strong> <?= htmlspecialchars($transaction_header_info['nama_pembeli']) ?></p>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered receipt-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="text-align: left;">Nama Barang</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($transaction_details as $item): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td style="text-align: left;"><?= htmlspecialchars($item['nama_produk']) ?></td>
                        <td>Rp <?= number_format($item['harga_satuan'], 0, ',', '.') ?></td>
                        <td><?= htmlspecialchars($item['jumlah']) ?></td>
                        <td>Rp <?= number_format($item['total_harga'], 0, ',', '.') ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="receipt-total">
            Total Pembayaran: Rp <?= number_format($transaction_header_info['grand_total'], 0, ',', '.') ?>
        </div>

        <div class="receipt-footer">
            <p>Terima kasih atas kunjungan Anda!</p>
            <p>Barang yang sudah dibeli tidak dapat dikembalikan.</p>
        </div>

        <div class="print-buttons">
            <button onclick="window.print()" class="btn btn-primary">
                <i class="fas fa-print"></i> Cetak Resi
            </button>
            <a href="riwayat_transaksi.php" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>