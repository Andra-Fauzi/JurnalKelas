<?php
include 'config.php';

$id = $_POST['id'];
echo $id . "mau di ubah";
$kelas = $_POST['kelas'];
$materi = $_POST['materi'];
$jumlah_murid = $_POST['jumlah_murid'];
$kehadiran = $_POST['kehadiran'];
$nama_guru = $_POST['nama_guru'];

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