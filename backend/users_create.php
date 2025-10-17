<?php
include 'config.php';

$nama = htmlspecialchars($_POST['nama']);
$password = htmlspecialchars($_POST['password']);
$admin = 0;


$sql = "INSERT INTO users (nama, password, admin)
        VALUES ('$nama', '$password'), '$admin'";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>
