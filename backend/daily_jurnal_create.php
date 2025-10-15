<?php
include 'config.php';

$judul = $_POST['judul'];
$kelas = $_POST['kelas'];
$url_image = $_POST["url_image"];
$jurnal = $_POST['jurnal'];
$nama_guru = $_POST['nama_guru'];


$sql = "INSERT INTO daily_journals (judul, url_gambar, kelas, jurnal, nama_guru)
        VALUES ('$judul','$url_image','$kelas', '$jurnal', '$nama_guru')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>