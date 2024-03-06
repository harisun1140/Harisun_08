<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="../file_css_admin/desainnn.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <h1>Daftar Pengguna</h1>
  <div class="button_pengguna"> 
    <i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
</svg></i>
   <a href="v_tambah_pengguna_baru.php">Tambah Pengguna</a>
  </div>
  
  <br><br>
  <table>
    <tr class="judul_barang">
      <td>Id Login</td>
      <td>Nama</td>
      <td>Username</td>
      <td>Password</td>
      <td>Status</td>
      <td>Aksi</td>
    </tr>
    <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_login
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login ORDER BY id_login DESC');
    foreach ($sql as $pengguna) {
    ?>
      <tr class="table_isi">
        <td><?= $pengguna['id_login'] ?> </td>
        <td><?= $pengguna['nama_pengguna'] ?></td>
        <td><?= $pengguna['username_pengguna'] ?></td>
        <td><?= $pengguna['password_pengguna'] ?></td>
        <td><?= $pengguna['status'] ?></td>
        <td class="button1"><a href="v_ubah_pengguna.php?id_login=<?= $pengguna['id_login'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
</svg></a></td>
      </tr>
    <?php } ?>
  </table>

</body>

</html>