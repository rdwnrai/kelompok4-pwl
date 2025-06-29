<?php
include "cek_login.php";
include "config.php";

// Tampilkan error MySQLi saat pengembangan (hapus di produksi)
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// === PROSES HAPUS DATA ===
if (isset($_GET['hapus']) && is_numeric($_GET['hapus'])) {
    $id = (int) $_GET['hapus'];

    $stmt = $conn->prepare("DELETE FROM produk WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();

    header("Location: master_data_produk.php");
    exit;
}

// === PROSES CARI DATA ===
$search = $_GET['cari'] ?? '';
$where = $search ? "WHERE nama_produk LIKE ?" : '';
$sql = "SELECT * FROM produk $where ORDER BY id DESC";

$stmt = $conn->prepare($sql);
if ($search) {
    $param = "%{$search}%";
    $stmt->bind_param("s", $param);
}
$stmt->execute();
$data = $stmt->get_result();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Master Data Produk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/master_data_produk.css">
</head>
<body>

    <h2>Master Data Produk</h2>

    <div class="form-and-dashboard-container">
        <form method="get">
            <input type="text" name="cari" placeholder="Cari produk..." value="<?= htmlspecialchars($search) ?>">
            <input type="submit" value="Cari">
            <a href="produk_input.php" class="btn btn-add">+ Tambah Produk</a>
        </form>

        <a href="dashboard.php" class="btn-dashboard">
            <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
        </a>
    </div>

    <table>
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1; while ($row = $data->fetch_assoc()): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= htmlspecialchars($row['nama_produk']) ?></td>
            <td>Rp <?= number_format($row['harga'], 0, ',', '.') ?></td>
            <td><?= $row['stok'] ?></td>
            <td class="aksi">
                <a href="produk_input.php?edit=<?= $row['id'] ?>">Ubah</a> |
                <a href="?hapus=<?= $row['id'] ?>" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>