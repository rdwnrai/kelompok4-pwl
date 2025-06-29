<?php
session_start();
include "config.php"; // nyambungin ke file config, biar konek ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // WARNING: cara kayak gini tuh rawan banget sama SQL Injection, jangan ditiru ya!
    // harusnya sih pake prepared statement sama password yang udah di-hash, biar aman bro!
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    
    if (mysqli_num_rows($result) === 1) {
        // kalo login sukses, simpen username ke session terus lempar ke dashboard
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        // kalo gagal, kasih tau user kalo username/password-nya salah
        $error = "Username atau password salah, bro!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <!-- Bootstrap CSS, biar tampilannya kece -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome buat icon-icon kece -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/login.css"> 
</head>
<body>
    <form class="login-container" method="post">
        <div class="avatar">
            <!-- ganti src-nya kalo mau pake logo lain -->
            <img src="asset/Group 21.png" alt="Logo Admin">
        </div>
        <h2>Login Admin</h2>
        <?php 
        // kalo ada error, tampilkan di sini bro
        if (isset($error)) {
            echo "<div class='error-message' role='alert'>$error</div>";
        } 
        ?>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <!-- Bootstrap JS, biar tombol2nya jalan -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
