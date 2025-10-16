<?php 
session_start();
if(!isset($_SESSION['admin']))
{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form absensi</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <div class="content">
        <a href="absensi.php" class="back">Back</a>
        <div>
        <form action="form_absensi.php" method="POST">
            <?php if(isset($_GET['id'])): ?>
                <input type="hidden" name="id" value=<?= $_GET['id'] ?>>
            <?php endif?>
            <input type="text" name="nama_guru" placeholder="Nama guru" value="<?= $_SESSION["name"] ?>">
            <br>
            <!-- <input type="text" name="kelas" placeholder="kelas" required> -->
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
            <br>
            <input type="text" name="materi" placeholder="materi" required>
            <br>
            <input type="number" name="jumlah_murid" placeholder="jumlah murid" required>
            <br>
            <input type="number" name="kehadiran" placeholder="kehadiran" required>
            <br>
            <input type="submit" name="submit">
        </div>
        </form>
    </div>
    <?php 
        if(isset($_POST['id']) && isset($_POST["submit"]))
        {
            include "backend/absences_update.php";
            header("Location: absensi.php");
        }
        else if(isset($_POST["submit"]))
        {
            include "backend/absences_create.php";
            header("Location: absensi.php");
        }
    ?>
</body>
</html>