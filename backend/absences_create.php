<?php
include 'config.php';

$kelas = $_POST['kelas'];
$materi = $_POST['materi'];
$jumlah_murid = $_POST['jumlah_murid'];
$kehadiran = $_POST['kehadiran'];
$nama_guru = $_POST['nama_guru'];

$sql = "INSERT INTO absences (nama_guru, kelas, materi, jumlah_murid, kehadiran)
        VALUES ('$nama_guru','$kelas', '$materi', '$jumlah_murid', '$kehadiran')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>
