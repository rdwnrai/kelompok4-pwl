<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "toko_plastik_kueh";
$port = 3307;

$conn = mysqli_connect($host, $user, $pass, $db, $port);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
