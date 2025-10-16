<?php
include 'backend/config.php';
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    trim($name);
    trim($password);
    if($name != "" && $password != "")
    {
        $sql = "select * from users where nama='$name'";
    
        
        
        $result=$koneksi->query($sql);
        $data=$result->fetch_all(MYSQLI_ASSOC);
        // var_dump($data, count($data));
        if(count($data) < 1)
        {
            
            echo 'berhasil';
            
            $sql = "insert into users (nama, password) values ('$name','$password')";
            if($koneksi->query($sql)){
                echo 'berhasil';
                header("Location: login.php");
            }
            else{
               $error = true;
            }
        }
        else{
            $exist = true;
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
        <form action="register.php" method="POST">
            <h1 style="color:white; text-shadow: 1px -1px black, 1px 1px black, -1px -1px black, -1px 1px black;">Register</h1>
            <input type="text" name='name' placeholder="username">
            <br>
            <input type="password" name='password' placeholder="password">
            <br>
            <input type="submit" name="submit" value="Register">
            <?php if(isset($exist)): ?>
                <h1 style="color:white; text-shadow: 1px -1px red, 1px 1px red, -1px -1px red, -1px 1px red;">Username sudah ada</h1>
            <?php endif ?>
            <?php if(isset($fillerror)): ?>
                <h1 style="color:white; text-shadow: 1px -1px red, 1px 1px red, -1px -1px red, -1px 1px red;">Mohon isi username atau password</h1>
            <?php endif ?>
            <?php if(isset($error)): ?>
            <h1 style="color:white; text-shadow: 1px -1px red, 1px 1px red, -1px -1px red, -1px 1px red;">Terjadi error</h1>
        <?php endif ?>
        </form>
    </div>
</body>
</html>