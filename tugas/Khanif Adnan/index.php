<?php include 'header.php'; ?>
<?php include 'home.php'; ?>

<div class="content">
  <?php
    // Ambil nama file dari parameter ?page
    $page = isset($_GET['page']) ? $_GET['page'] : 'biodata';

    // Cek apakah file ada dan aman diakses
    if (file_exists($page . '.php')) {
        include $page . '.php';
    } else {
        echo "Halaman tidak ditemukan atau tidak valid.";
    }
  ?>
</div>

<?php include 'footer.php'; ?>
