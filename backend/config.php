<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "jurnal_kelas"; // Ganti dengan nama database kamu 

$koneksi = new mysqli($host, $user, $password, $db);

if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>


