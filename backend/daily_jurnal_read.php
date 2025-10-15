<?php
include 'config.php';

$result = $koneksi->query("SELECT * FROM daily_journals");

$data = $result->fetch_all(MYSQLI_ASSOC);

?>
