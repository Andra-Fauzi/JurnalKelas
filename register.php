<?php
include 'backend/config.php';
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql = "insert into users (nama, password) values ('$name','$password')";
    if($koneksi->query($sql)){
        echo 'berhasil';
    }
    else{
        echo 'gagal';
    }

    
        
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="register.php" method='post'>
        <input type="text" name='name'>
        <input type="password" name='password'>
        <input type="submit" name='submit'>
    </form>
</body>
</html>