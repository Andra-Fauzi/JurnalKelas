<?php
session_start();

if(!isset($_SESSION['admin']))
{
    header("Location: index.php");
}

if (isset($_POST["submit"])) {
    include "upload.php"; // upload file dulu

    if ($target_file) { // kalau berhasil upload
        $_POST["url_image"] = $target_file;

        if (isset($_POST["id"])) {
            include "backend/daily_jurnal_update.php";
        } else {
            include "backend/daily_jurnal_create.php";
        }

        header("Location: jurnal.php");
        exit;
    } else {
        echo "<p>Upload gagal, silakan coba lagi.</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Jurnal</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <div class="content">
        <a href="jurnal.php" class="back">Back</a>
        <div>
            <form action="form_jurnal.php" method="POST" enctype="multipart/form-data">
                <?php if (isset($_GET['id'])): ?>
                    <input type="hidden" name="id" value="<?= htmlspecialchars($_GET['id']) ?>">
                <?php endif ?>
                <input type="text" name="judul" placeholder="judul" required><br>
                <label for="kelas">Kelas:</label>
            <select name="kelas" id="kelas" required>
                <?php 
                    include "backend/config.php";
                    $sql = "SELECT * FROM classes";
                    $result = $koneksi->query($sql);
                    $data = $result->fetch_all(MYSQLI_ASSOC);
                ?>
                <?php foreach($data as $row): ?>
                <option value="<?= $row['nama'] ?>"><?= $row['nama'] ?></option>
                <?php endforeach ?>
            </select>
                <label for="image">Image:</label>
                <input type="file" name="image" accept="image/*" required><br>
                <textarea name="jurnal" id="jurnal" placeholder="jurnal" required></textarea><br>
                <input type="text" name="nama_guru" placeholder="nama guru" value="<?= $_SESSION['name'] ?>"><br>
                <input type="submit" name="submit" value="Simpan">
            </form>
        </div>
    </div>
</body>
</html>
