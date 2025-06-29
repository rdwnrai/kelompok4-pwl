<?php include 'header.php'; ?>
<?php include 'home.php'; ?>

<div class="content">
  <?php
    if (isset($_GET['page']) && file_exists($_GET['page'] . '.php')) {
      include $_GET['page'] . '.php';  
  } else {
      echo "Halaman tidak ditemukan atau tidak valid.";
  }
  ?>
</div>

<?php include 'footer.php'; ?>
