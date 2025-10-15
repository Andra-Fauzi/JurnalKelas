<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM absences WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $koneksi->error;
}






header("Location: ../absensi.php");





?>
