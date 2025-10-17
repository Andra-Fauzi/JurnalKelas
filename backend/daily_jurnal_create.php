<?php
include 'config.php';

$judul = htmlspecialchars($_POST['judul']);
$kelas = htmlspecialchars($_POST['kelas']);
$url_image = htmlspecialchars($_POST["url_image"]);
$jurnal = htmlspecialchars($_POST['jurnal']);
$nama_guru = htmlspecialchars($_POST['nama_guru']);


$sql = "INSERT INTO daily_journals (judul, url_gambar, kelas, jurnal, nama_guru)
        VALUES ('$judul','$url_image','$kelas', '$jurnal', '$nama_guru')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>