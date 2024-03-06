<?php

use function PHPSTORM_META\type;

session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petugas</title>
  <link rel="stylesheet" href="../file_css_petugas/homeee.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="box">

    <h1 class="text">Dasboard</h1>

    <div><img src="../img/koko.png" width="150" height="150"></div>
    <div class="text_box">SEBAGAI : <?= $_SESSION['nama_pengguna']; ?> <br>
    ID : <?=$_SESSION['id_login']; ?> </div>
 

  </div>

</body>

</html>