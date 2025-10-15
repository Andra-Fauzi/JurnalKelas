<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$password= $_POST['password'];
$admin = $_POST['admin'];


$sql = "UPDATE users SET
        nama='$nama',
        pasword='$password',
        admin='$admin'
        WHERE id=$id";

if ($koneksi->query($sql) === TRUE){
    echo "Data berhasil di update";
} else {
    echo "Error: " . $koneksi->error;
}
?>