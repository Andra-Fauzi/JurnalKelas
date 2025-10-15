<?php
include 'config.php';

$result = $koneksi->query("SELECT * FROM users");

$data = $result->fetch_all(MYSQLI_ASSOC);

?>
