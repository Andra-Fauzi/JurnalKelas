<?php
include 'config.php';

$kelas = $_POST['kelas'];
$jurnal = $_POST['jurnal'];
$nama_guru = $_POST['nama_guru'];


$sql = "INSERT INTO daily_journals (kelas, jurnal, nama_guru)
        VALUES ('$kelas', '$jurnal', '$nama_guru')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>