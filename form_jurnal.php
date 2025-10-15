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
        <form action="form_jurnal.php" method="POST">
            <?php if(isset($_GET['id'])): ?>
                <input type="hidden" name="id" value=<?= $_GET['id'] ?>>
            <?php endif?>
            <input type="text" name="kelas" placeholder="kelas">
            <br>
            <textarea name="jurnal" id="jurnal" placeholder="jurnal"></textarea>
            <br>
            <input type="text" name="nama_guru" placeholder="nama guru">
            <br>
            <input type="submit" name="submit">
        </div>
        </form>
    </div>
    <?php
        if(isset($_POST["id"]) && isset($_POST["submit"]))
        {
            include "backend/daily_jurnal_update.php";
            header("Location: jurnal.php");
        }
        else if(isset($_POST["submit"]))
        {
            include "backend/daily_jurnal_create.php";
            header("Location: jurnal.php");
        }
    ?>
</body>
</html>