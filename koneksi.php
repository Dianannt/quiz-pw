<?php

   $servername  = "localhost";
   $username  = "root";
   $password  = " ";
   $database  = "latihan";

   try{
    $db = new PDO('mysql:dbname='.$database.';host='.$servername, $username, $password);

    $conn -> setAttribute(PDO :: ATTR_ERRMODE, PDO :: ERRMODE_EXPECTION);
    echo "Connection sukses!";
   }
   catch(PDOExpection $e){
       echo "Connection gagal: " .$e->getMessage();
   }
?>

<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<title>Halaman Sukses Login</title>
<div align='center'>
   Selamat Datang, <b><?php echo $username;?></b> <a href="logout.php"><b>Logout</b></a>
</div>