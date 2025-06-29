<?php
include "cek_login.php";
include "config.php";

$search = isset($_GET['cari']) ? htmlspecialchars(trim($_GET['cari'])) : '';
$where_clause = "";

if (!empty($search)) {
    // Cari berdasarkan id_transaksi_group atau nama_pembeli atau nama_produk
    
    $where_clause = "WHERE t.id_transaksi_group LIKE '%$search%' OR t.nama_pembeli LIKE '%$search%' OR p.nama_produk LIKE '%$search%'";
}

// ambil semua transaksi unik berdasarkan id_transaksi_group
// mengambil satu baris per id_transaksi_group, dengan total harga agregat
$query_riwayat = "
    SELECT
        t.id_transaksi_group,
        t.tanggal,
        t.nama_pembeli,
        SUM(t.total_harga) AS grand_total_per_group,
        COUNT(t.id) AS total_item_count
    FROM
        transaksi t
    LEFT JOIN
        produk p ON t.id_produk = p.id -- Berguna jika ingin mencari berdasarkan nama_produk di riwayat
    $where_clause
    GROUP BY
        t.id_transaksi_group, t.tanggal, t.nama_pembeli
    ORDER BY
        t.tanggal DESC, t.id_transaksi_group DESC
";

$data_riwayat = mysqli_query($conn, $query_riwayat);

if (!$data_riwayat) {
    die("Error dalam query riwayat transaksi: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/riwayat_transaksi.css">
</head>
<body>

    <h2>Riwayat Transaksi</h2>

    <div class="container">
        <div class="search-form">
            <form method="get" style="display: flex; gap: 10px; flex-grow: 1;">
                <input type="text" name="cari" placeholder="Cari ID, Pembeli, Produk..." value="<?= htmlspecialchars($search) ?>">
                <input type="submit" value="Cari">
            </form>
            <a href="dashboard.php" class="btn-dashboard">
                <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
            </a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Transaksi</th>
                        <th>Tanggal</th>
                        <th>Nama Pembeli</th>
                        <th>Total (Rp)</th>
                        <th>Jumlah Item</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php if (mysqli_num_rows($data_riwayat) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($data_riwayat)): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($row['id_transaksi_group']) ?></td>
                            <td><?= date('d M Y', strtotime($row['tanggal'])) ?></td>
                            <td><?= htmlspecialchars($row['nama_pembeli']) ?></td>
                            <td><?= number_format($row['grand_total_per_group'], 0, ',', '.') ?></td>
                            <td><?= htmlspecialchars($row['total_item_count']) ?></td>
                            <td class="aksi-buttons">
                                <a href="detail_transaksi.php?id_transaksi=<?= htmlspecialchars($row['id_transaksi_group']) ?>" class="btn btn-view" target="riwayat_transaksi">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="7" class="no-data">Tidak ada data transaksi yang ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>