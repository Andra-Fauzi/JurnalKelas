<?php 
session_start();


if(isset($_SESSION["login"]))
{
    $login = true;
}
else
{
    $login = false;
}

// var_dump($_SESSION["name"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jurnal kelas</title>
    <link rel="stylesheet" href="assets/css/data.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
        <h1>jurnal kelas</h1>
        <div class="navigation">
            
            <a href="index.php" style="background-color: white;">dashboard</a>
            <?php if($login == true): ?>
                <a href="absensi.php">absensi</a>
                <a href="jurnal.php">jurnal</a>
            <?php endif ?>
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

                <img src="assets/img/jurnal.jpg" alt="" class="dashboard-image">
                <h1>Selamat datang di jurnal  kelas</h1>
        </div>

        </div>
    </div>
    
    
</body>
</html>