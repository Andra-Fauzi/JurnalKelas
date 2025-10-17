<?php
include 'config.php';

$kelas = htmlspecialchars($_POST['kelas']);
$materi = htmlspecialchars($_POST['materi']);
$jumlah_murid = htmlspecialchars($_POST['jumlah_murid']);
$kehadiran = htmlspecialchars($_POST['kehadiran']);
$nama_guru = htmlspecialchars($_POST['nama_guru']);

$sql = "INSERT INTO absences (nama_guru, kelas, materi, jumlah_murid, kehadiran)
        VALUES ('$nama_guru','$kelas', '$materi', '$jumlah_murid', '$kehadiran')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>
