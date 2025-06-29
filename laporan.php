<?php
include "cek_login.php";
include "config.php";

$where = "";
$tgl_filter = "";
$total_penjualan = 0;

if (isset($_GET['tanggal']) && $_GET['tanggal'] != '') {
    $tgl = $_GET['tanggal'];
    $where = "WHERE tanggal = '$tgl'";
    $tgl_filter = $tgl;
}

$data = mysqli_query($conn, "SELECT t.*, p.nama_produk FROM transaksi t JOIN produk p ON t.id_produk=p.id $where");


$chartData = mysqli_query($conn, "SELECT tanggal, SUM(total_harga) as total FROM transaksi GROUP BY tanggal");
$labels = [];
$totals = [];
while ($row = mysqli_fetch_assoc($chartData)) {
    $labels[] = $row['tanggal'];
    $totals[] = $row['total'];
}

$totalQuery = mysqli_query($conn, "SELECT SUM(total_harga) AS total FROM transaksi $where");
$totalRow = mysqli_fetch_assoc($totalQuery);
$total_penjualan = $totalRow['total'] ?: 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Transaksi</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="css/laporan.css">
</head>
<body>

    <h2>Laporan Transaksi</h2>

    <form class="filter-form" method="get">
        Filter Tanggal:
        <input type="date" name="tanggal" value="<?= htmlspecialchars($tgl_filter) ?>">
        <input type="submit" value="Filter">
    </form>

    <div class="summary">
        <strong>Total Penjualan <?= $tgl_filter ? "pada $tgl_filter" : "Keseluruhan" ?>:</strong><br>
        Rp <?= number_format($total_penjualan, 0, ',', '.') ?>
    </div>
    <div style="text-align: right; margin-top: 20px;">
        <a href="dashboard.php" class="dashboard-btn">
            ⬅️ Dashboard
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; while ($row = mysqli_fetch_assoc($data)): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['tanggal'] ?></td>
                <td><?= $row['nama_produk'] ?></td>
                <td><?= $row['jumlah'] ?></td>
                <td>Rp <?= number_format($row['total_harga'], 0, ',', '.') ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>