<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM daily_journals WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $koneksi->error;
}
?>
