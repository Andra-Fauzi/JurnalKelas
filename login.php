<?php
include 'backend/config.php';
session_start();
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql = "select * from users where nama='$name'";

    
        
    $result=$koneksi->query($sql);
    $data=$result->fetch_all(MYSQLI_ASSOC);
    if($data[0]['password']==$password){
        echo 'berhasil';
        $_SESSION['login']=true;
        $_SESSION['name']=$data[0]['nama'];
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
    <form action="login.php" method='post'>
        <input type="text" name='name'>
        <input type="password" name='password'>
        <input type="submit" name='submit'>
    </form>
</body>
</html>