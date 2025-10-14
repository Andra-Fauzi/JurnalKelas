<?php
include 'config.php';

$id = $_POST['id'];
$kelas = $_POST['kelas'];
$jurnal= $_POST['jurnal'];


$sql = "UPDATE daily_journals SET
        kelas='$kelas',
        jurnal='$jurnal',
        WHERE id=$id";

if ($koneksi->query($sql) === TRUE){
    echo "Data berhasil di update";
} else {
    echo "Error: " . $koneksi->error;
}
?>