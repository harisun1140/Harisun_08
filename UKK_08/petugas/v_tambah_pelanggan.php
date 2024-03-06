<?php
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
  <title>Tambah Pelanggan Baru</title>
  <link rel="stylesheet" href="../file_css_petugas/desainnn.css">

</head>

<body>
  <?php include "navbar.php" ?>
  <form action="m_tambah_pelanggan.php" method="post">
    <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
    <div class="tambah_pelanggan">
    <h1>Tambah Pelanggan Baru</h1>
    <table>
      <tr>
        <td>Id Pelanggan</td>
        <td>:</td>
        <td><input type="text" name="id_pelanggan" id="" value="<?= date('mis'); ?>"readonly></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama_pelanggan" id=""></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat_pelanggan" id=""></td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><input type="text" name="telepon_pelanggan" id=""></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Simpan"></td>
      </tr>
    </table>
    </div>
  </form>
</body>

</html>