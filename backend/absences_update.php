<?php
include 'config.php';

$id = $_POST['id'];
$kelas = $_POST['kelas'];
$materi = $_POST['materi'];
$jumlah_murid = $_POST['jumlah_murid'];
$kehadiran = $_POST['kehadiran'];

$sql = "UPDATE absences SET
        kelas='$kelas',
        materi='$materi',
        jumlah_murid='$jumlah_murid', 
        kehadiran='$kehadiran' 
        WHERE id=$id";

if ($koneksi->query($sql) === TRUE){
    echo "Data berhasil di update";
} else {
    echo "Error: " . $koneksi->error;
}















?>