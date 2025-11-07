<?php 
session_start();


if(isset($_SESSION["login"]))
{
    $login = true;
}
else
{
    $login = false;
    header("Location: login.php");
}

// var_dump($_SESSION["name"]);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>absensi</title>
    <link rel="stylesheet" href="assets/css/data.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
        <h1>jurnal kelas</h1>
        <div class="navigation">
            
            <a href="index.php">dashboard</a>
            <a href="absensi.php">absensi</a>
            <a href="jurnal.php" style="background-color: white;">jurnal</a>
        </div>
    </div>
    <div class="content">
            <div class="maincontent">
                <?php if($login != true): ?>
                    <div class="authbar">
                        <a href="register.php">Register</a>
                        <a href="login.php">Login</a>
                    </div>
                <?php else:?>
                    <div class="userbar">
                        <div class="user">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                                </svg>
                            </div>
                            <div class="name">
                                <p><?= $_SESSION['name'] ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="button">
                            <!-- <a href="profile.php">Profile</a> -->
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                <?php endif ?>
                <table class="jurnal-lg">
                    <tr>
                        <td>id</td>
                        <td>Judul</td>
                        <td>Guru</td>
                        <td>Kelas</td>
                        <td>Gambar</td>
                        <td>Jurnal</td>
                        <?php if(isset($_SESSION['admin'])): ?>
                        <td>Aksi</td>
                        <?php endif ?>
                    </tr>
                    <?php include "backend/daily_jurnal_read.php" ?>
                    <?php 
                    $offset = (isset($_GET['index'])) ? $_GET['index'] : 0;
                    $modified_data = array_slice($data, $offset * 3, 3);
                    // var_dump($offset*4, count($data)-1);
                    // var_dump($data);
                    ?>
                    <?php foreach($modified_data as $index => $row): ?>
                    <tr>
                        <td><?= ($index+1)+($offset*3) ?></td>
                        <td><?= $row["judul"] ?></td>
                        <td><?= $row["nama_guru"] ?></td>
                        <td><?= $row["kelas"] ?></td>
                        <td style="padding: 0; margin: 0;"><img style="padding: 0; margin: 0;" src=<?= $row["url_gambar"]?> alt="" height="200" width="300"></td>
                        <td><?= substr($row["jurnal"], 0, 30) ?>
                        <?php if(strlen($row["jurnal"])>30):?>
                        <a href="description.php?id=<?= $row['id'] ?>">Read more</a></td>
                        <?php endif ?>
                        <?php if(isset($_SESSION["admin"])): ?>
                        <td>
                            <div class="action">
                                <a class="tambah" href="backend/daily_jurnal_delete.php?id=<?= $row['id']?>">Hapus</a> <br> 
                                <a class="tambah" href="form_jurnal.php?id=<?= $row["id"] ?>">Edit</a>
                            </div>
                        </td>
                        <?php endif ?>
                    </tr>
                    <?php endforeach ?>
                </table>
                <br>
                <div>
                    <?php if(count($data) > 3): ?>
                        <?php if($offset != 0): ?>
                            <a class="tambah" href="jurnal.php?index=<?= $offset-1 ?>">Back</a>
                        <?php endif ?>
                        <?php if(($offset+1)*3 < count($data)): ?>
                            <a class="tambah" href="jurnal.php?index=<?= $offset+1 ?>">Next</a>
                        <?php endif?>
                    <?php endif?>
                </div>
                <br>
                <?php if(isset($_SESSION["admin"])):?>
                    <a href="form_jurnal.php" class="tambah">tambah data</a>
                <?php endif ?>
                <div class="container-sm">
                    <?php foreach($modified_data as $index => $row): ?>
                    <div class="jurnal-sm">
                        <div>
                            <img src="<?= $row["url_gambar"] ?>" alt="" width="200" height="150">
                            <h1><?= $row["kelas"] ?></h1>
                            <h2><?= $row["nama_guru"] ?></h2>
                        </div>
                        <hr>
                        <div>
                            
                            <p><?= $row["judul"] ?></p>
                            <a href="description.php?id=<?= $row['id'] ?>">Read more</a>
                            <?php if(isset($_SESSION["admin"])): ?>
                        
                            <div class="action">
                                <a class="tambah" href="backend/daily_jurnal_delete.php?id=<?= $row['id']?>">Hapus</a> <br> 
                                <a class="tambah" href="form_jurnal.php?id=<?= $row["id"] ?>">Edit</a>
                            </div>
                        
                            <?php endif ?>
                        </div>
                        
                    </div>
                    <?php endforeach ?>
                </div>
        </div>

        </div>
    </div>
    
    
</body>
</html>

