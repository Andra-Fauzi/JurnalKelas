<?php
include 'config.php';

$id = htmlspecialchars($_POST['id']);
$nama = htmlspecialchars($_POST['nama']);
$password= htmlspecialchars($_POST['password']);
$admin = htmlspecialchars($_POST['admin']);


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