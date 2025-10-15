<?php 

include "backend/config.php";

$id = $_GET["id"];

$result = $koneksi->query("SELECT * FROM daily_journals WHERE id='$id'");

$raw_data = $result->fetch_all(MYSQLI_ASSOC);

$data = $raw_data[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description <?= $data["kelas"] ?></title>
    <link rel="stylesheet" href="assets/css/description.css">
</head>
<body>
    <div class="main-content">
        <a href="jurnal.php">Back</a>
        <br>
        <h1>Judul: <?= $data["judul"] ?></h1>
        <h2>Jurnal kelas: <?= $data['kelas'] ?></h1>
        <h3>By: <?= $data['nama_guru']?></h2>
        <img src="<?= $data["url_gambar"] ?>" alt="" width="600" height="300">
        <hr>
        <p><?= $data['jurnal'] ?></p>
    </div>
</body>
</html>