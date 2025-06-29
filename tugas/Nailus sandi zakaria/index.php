<body>
  <?php include 'template/header.php'; ?>

  <div class="container">
    <?php include 'template/menu.php'; ?>

    <div class="content">
      <?php
         $page = isset($_GET['page']) ? $_GET['page'] : 'home'; // Default halaman home

         if (file_exists("latihan/{$page}.php")) {
             include "latihan/{$page}.php";
         } else {
             echo "<h3>Selamat Datang di Website saya Silahkan pilih Daftar latihan di sebelah kiri !</h3>";
         }
       ?>

    </div>
  </div>

  <?php include 'template/footer.php'; ?>
</body>
