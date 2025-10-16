<?php
include 'backend/config.php';
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    trim($name);
    trim($password);
    $sql = "select * from users where nama='$name'";

    
    if($name != "" && $password != "")
    {
        $result=$koneksi->query($sql);
        $data=$result->fetch_all(MYSQLI_ASSOC);
        if(count($data) >= 1)
        {
            if($data[0]['password']==$password){
                echo 'berhasil';
                $_SESSION['login']=true;
                $_SESSION['name']=$data[0]['nama'];
                if($data[0]['admin']==1)
                {
                    $_SESSION['admin'] = true;
                }
                header("Location: index.php");
            }
            else{
                // echo 'gagal';
                $login_error = true;
            }
        }
        else{
            // echo 'gagal';
            $login_error = true;
        }
    }
    else
    {
        $fillerror = true;
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/form.css">
</head>
<body>
    <div class="content">
        <a href="index.php" class="back">Back</a>
        <div>
        <form action="login.php" method="POST">
            <h1 style="color:white; text-shadow: 1px -1px black, 1px 1px black, -1px -1px black, -1px 1px black;">LOGIN</h1>
            <input type="text" name='name' placeholder="username">
            <br>
            <input type="password" name='password' placeholder="password">
            <br>
            <input type="submit" name="submit" value="Masuk">
            <?php if(isset($login_error)):?>
                <h1 style="color:white; text-shadow: 1px -1px red, 1px 1px red, -1px -1px red, -1px 1px red;">Username atau Password salah</h1>
            <?php endif?>
            <?php if(isset($fillerror)):?>
                <h1 style="color:white; text-shadow: 1px -1px red, 1px 1px red, -1px -1px red, -1px 1px red;">Mohon isi Username atau Password</h1>
            <?php endif?>
        </form>
    </div>
</body>
</html>