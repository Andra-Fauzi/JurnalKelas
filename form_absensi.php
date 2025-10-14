<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form absensi</title>
</head>
<body>
    <form action="form_absensi.php" method="POST">
        <input type="text" name="nama_guru" placeholder="Nama guru">
        <input type="text" name="kelas" placeholder="kelas">
        <input type="text" name="materi" placeholder="materi">
        <input type="number" name="jumlah_murid" placeholder="jumlah murid">
        <input type="number" name="kehadiran" placeholder="kehadiran">
        <input type="submit" name="submit">
    </form>
    <?php 
        if(isset($_GET['id']) && isset($_POST["submit"]))
        {
            include "backend/absences_update.php";
        }
        else if(isset($_POST["submit"]))
        {
            include "backend/absences_create.php";
        }
    ?>
</body>
</html>