<?php
include 'config.php';

$result = $koneksi->query("SELECT * FROM users");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " | nama: " . $row["nama"] . " | password: " . $row["password"]; 
}

?>
