<?php
include 'config.php';

$result = $koneksi->query("SELECT * FROM absences");

$data = $result->fetch_all(MYSQLI_ASSOC);

?>
