<?php
include 'config.php';

$kelas = $_POST['kelas'];
$jurnal = $_POST['jurnal'];


$sql = "INSERT INTO daily_journals (kelas, jurnal)
        VALUES ('$nama', '$password')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>