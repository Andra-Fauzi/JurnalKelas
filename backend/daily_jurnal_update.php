<?php
include 'config.php';

$id = $_POST['id'];
$kelas = $_POST['kelas'];
$jurnal= $_POST['jurnal'];
$nama_guru = $_POST['nama_guru'];


$sql = "UPDATE daily_journals SET
        nama_guru='$nama_guru',
        kelas='$kelas',
        jurnal='$jurnal'
        WHERE id='$id'";

if ($koneksi->query($sql) === TRUE){
    echo "Data berhasil di update";
} else {
    echo "Error: " . $koneksi->error;
}
?>