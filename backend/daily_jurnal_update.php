<?php
include 'config.php';

$id = htmlspecialchars($_POST['id']);
$url_image = htmlspecialchars($_POST["url_image"]);
$kelas = htmlspecialchars($_POST['kelas']);
$jurnal= htmlspecialchars($_POST['jurnal']);
$nama_guru = htmlspecialchars($_POST['nama_guru']);


$sql = "UPDATE daily_journals SET
        nama_guru='$nama_guru',
        url_gambar='$url_image',
        kelas='$kelas',
        jurnal='$jurnal'
        WHERE id='$id'";

if ($koneksi->query($sql) === TRUE){
    echo "Data berhasil di update";
} else {
    echo "Error: " . $koneksi->error;
}
?>