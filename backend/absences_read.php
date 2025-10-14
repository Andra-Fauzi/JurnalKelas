<?php
include 'config.php';

$result = $koneksi->query("SELECT * FROM absences");

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . " | Kelas: " . $row["kelas"] . " | Materi: " . $row["materi"] . 
         " | Jumlah Murid: " . $row["jumlah_murid"] . " | Kehadiran: " . $row["kehadiran"] . "<br>";
}

?>
