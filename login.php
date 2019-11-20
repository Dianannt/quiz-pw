<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
</head>
<body>

<?php
    if($GET['Pesan'])){
        if($_GET['Pesan'] == "Gagal"){
            echo "Login tidak berhasil! username dan Password yang anda masukan salah.";
        }
    }
?>
<br>
<form method= "post" action="prosesdaftar.php">
    <table>
    <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="Silahkan masukan username"></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Silahkan masukan password"></td>    
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Login"></td>
    </tr>
    </table>
</form>
</body>
</html>