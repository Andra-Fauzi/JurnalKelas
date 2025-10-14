<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="form_jurnal.php" method="POST">
        <input type="text" name="kelas" placeholder="kelas">
        <input type="text" name="jurnal" placeholder="jurnal">
        <input type="text" name="nama_guru" placeholder="nama guru">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_GET["id"]) && isset($_POST["submit"]))
        {
            include "backend/daily_jurnal_update.php";
        }
        else if(isset($_POST["submit"]))
        {
            include "backend/daily_jurnal_create.php";
        }
    ?>
</body>
</html>