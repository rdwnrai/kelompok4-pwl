<?php
include "cek_login.php";
include "config.php";

// Ambil data untuk statistik
$total_produk = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM produk"))['total'];
$total_transaksi = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM transaksi"))['total'];
$total_penjualan = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(total_harga) AS total FROM transaksi"))['total'] ?? 0;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

    <?php include 'sidebar.php'; ?>

    <div class="main p-4" style="margin-left: 230px;"> <!-- Jika sidebar lebarnya 230px -->
       <!-- Header Section -->
<div class="row mb-4">
    <div class="col">
        <div class="d-flex justify-content-between align-items-center p-4 bg-white rounded shadow-sm border">
            <div>
                <h1 class="h4 mb-1 fw-bold"><i class="fas fa-chart-line me-2 text-primary"></i> Dashboard Admin</h1>
                <p class="text-muted mb-0">Selamat datang di dashboard admin</p>
            </div>
        </div>
    </div>
</div>


            <!-- Cards Statistik -->
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary shadow h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">Total Produk</h5>
                                <h3><?= $total_produk ?></h3>
                            </div>
                            <i class="fas fa-box fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success shadow h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">Total Transaksi</h5>
                                <h3><?= $total_transaksi ?></h3>
                            </div>
                            <i class="fas fa-receipt fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning shadow h-100">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title">Total Penjualan</h5>
                                <h3>Rp <?= number_format($total_penjualan, 0, ',', '.') ?></h3>
                            </div>
                            <i class="fas fa-money-bill-wave fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart Penjualan -->
            <div class="row mt-5">
                <div class="col">
                    <div class="card shadow">
                        <div class="card-header bg-white">
                            <h5 class="mb-0">Grafik Penjualan Tahunan</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="salesChart" style="height: 300px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/chart-dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
