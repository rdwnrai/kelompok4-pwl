<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tugas Febrian - Pemrograman Web 2</title>

  <!-- Font Awesome buat icon-icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <!-- Tombol toggle menu (khusus HP) -->
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>

  <!-- Sidebar kiri buat navigasi -->
  <div class="sidebar">
    <h3><i class="fas fa-file-code"></i> Daftar File PHP</h3>
    <ul>
      <li><a href="contoh1.php" target="contentFrame"><i class="fas fa-file-alt"></i> Contoh 1</a></li>
      <li><a href="contoh2.php" target="contentFrame"><i class="fas fa-file-alt"></i> Contoh 2</a></li>
      <li><a href="Hello World.php" target="contentFrame"><i class="fas fa-globe"></i> Hello World</a></li>
      <li><a href="konstanta.php" target="contentFrame"><i class="fas fa-lock"></i> Konstanta</a></li>
      <li><a href="operator_string.php" target="contentFrame"><i class="fas fa-cogs"></i> Operator String</a></li>
      <li><a href="variable.php" target="contentFrame"><i class="fas fa-dollar-sign"></i> Variable</a></li>
      <li><a href="variable_objek.php" target="contentFrame"><i class="fas fa-cube"></i> Variable Objek</a></li>
      <li><a href="Kondisi IF.php" target="contentFrame"><i class="fas fa-question-circle"></i> Kondisi IF</a></li>
      <li><a href="Kondisi IF 2.php" target="contentFrame"><i class="fas fa-question-circle"></i> Kondisi IF 2</a></li>
      <li><a href="Switch Case.php" target="contentFrame"><i class="fas fa-exchange-alt"></i> Switch Case</a></li>
      <li><a href="While Loop.php" target="contentFrame"><i class="fas fa-redo-alt"></i> While Loop</a></li>
      <li><a href="Do While Loop.php" target="contentFrame"><i class="fas fa-sync-alt"></i> Do While Loop</a></li>
      <li><a href="For Loop.php" target="contentFrame"><i class="fas fa-play"></i> For Loop</a></li>
      <li><a href="Foreach Loop.php" target="contentFrame"><i class="fas fa-list"></i> Foreach Loop</a></li>
      <li><a href="Modularitas.php" target="contentFrame"><i class="fas fa-puzzle-piece"></i> Modularitas</a></li>
      <li><a href="callbyreference.php" target="contentFrame"><i class="fas fa-share-alt"></i> callbyreference</a></li>
      <li><a href="callbyvalue.php" target="contentFrame"><i class="fas fa-copy"></i> callbyvalue</a></li>
      <li><a href="function.php" target="contentFrame"><i class="fas fa-wrench"></i> function</a></li>
      <li><a href="functionparameter.php" target="contentFrame"><i class="fas fa-tools"></i> functionparameter</a></li>
      <li><a href="parameterdefault.php" target="contentFrame"><i class="fas fa-sliders-h"></i> parameterdefault</a></li>
      <li><a href="latihan5-1.php" target="contentFrame"><i class="fas fa-file-code"></i> latihan5-1</a></li>
      <li><a href="latihan5-2.php" target="contentFrame"><i class="fas fa-file-code"></i> latihan5-2</a></li>
      <li><a href="latihan5-3.php" target="contentFrame"><i class="fas fa-file-code"></i> latihan5-3</a></li>
    </ul>
  </div>

  <!-- Konten utama di samping kanan -->
  <div class="main-content">
    <div class="top-menu">
      <!-- Tombol-tombol navigasi atas -->
      <button onclick="changeIframe('home.php')" class="menu-button"><i class="fas fa-home"></i> Home</button>
      <button onclick="changeIframe('biodata.php')" class="biodata-button"><i class="fas fa-user-circle"></i> Biodata</button>
      <button onclick="changeIframe('kontak.php')" class="menu-button"><i class="fas fa-address-book"></i> Kontak</button>
    </div>

    <!-- Judul -->
    <div class="header">202243500914 - FEBRIAN RISKI ADI SANTOSO</div>

    <!-- Tempat iframe ditampilkan -->
    <div class="iframe-container">
      <iframe name="contentFrame" src="biodata.php"></iframe>
    </div>

    <!-- Footer -->
    <div class="footer">Tugas Pemrograman Web Lanjut, FEBRIAN RISKI ADI SANTOSO</div>
  </div>

  <!-- Script JS buat interaksi -->
  <script>
    function changeIframe(url) {
      const iframe = document.querySelector('iframe');
      iframe.style.opacity = "0";
      setTimeout(() => {
        iframe.src = url;
        iframe.style.opacity = "1";
      }, 500);
    }

    function toggleMenu() {
      const sidebar = document.querySelector('.sidebar');
      sidebar.classList.toggle('active');

      if (window.innerWidth <= 600) {
        const sidebarLinks = document.querySelectorAll('.sidebar ul li a');
        sidebarLinks.forEach(link => {
          link.addEventListener('click', () => {
            sidebar.classList.remove('active');
          }, { once: true });
        });
      }
    }

    document.addEventListener('click', (event) => {
      const sidebar = document.querySelector('.sidebar');
      const menuToggle = document.querySelector('.menu-toggle');
      if (window.innerWidth <= 600 && sidebar.classList.contains('active')) {
        if (!sidebar.contains(event.target) && !menuToggle.contains(event.target)) {
          sidebar.classList.remove('active');
        }
      }
    });

    document.addEventListener('DOMContentLoaded', () => {
      if (window.innerWidth <= 600) {
        document.querySelector('.sidebar').classList.remove('active');
      }
    });
  </script>
</body>
</html>
