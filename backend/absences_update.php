<?php
include 'config.php';

$id = htmlspecialchars($_POST['id']);
echo $id . "mau di ubah";
$kelas = htmlspecialchars($_POST['kelas']);
$materi = htmlspecialchars($_POST['materi']);
$jumlah_murid = htmlspecialchars($_POST['jumlah_murid']);
$kehadiran = htmlspecialchars($_POST['kehadiran']);
$nama_guru = htmlspecialchars($_POST['nama_guru']);

$sql = "UPDATE absences SET
        nama_guru='$nama_guru',
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