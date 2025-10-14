<?php
include 'config.php';

$nama = $_POST['nama'];
$password = $_POST['password'];


$sql = "INSERT INTO users (nama, password)
        VALUES ('$nama', '$password')";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Error: " . $koneksi->error;
}
?>
