<?php
include 'config.php';

$kelas = $_POST['kelas'];
$materi = $_POST['materi'];
$jumlah_murid = $_POST['jumlah_murid'];
$kehadiran = $_POST['kehadiran'];

$sql = "INSERT INTO absences (kelas, materi, jumlah_murid, kehadiran)
        VALUES ('$kelas', '$materi', '$jumlah_murid', '$kehadiran')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>
