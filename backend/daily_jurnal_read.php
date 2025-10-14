<?php
include 'config.php';

$result = $koneksi->query("SELECT * FROM daily_journals");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " | kelas: " . $row["kelas"] . " | jurnal: " . $row["jurnal"]; 
}

?>
