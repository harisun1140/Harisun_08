

<?php
//ambil koneksi
include "../config.php";

//ambil data id_barang dari URL
$id_pelanggan = $_GET['id_pelanggan'];


// $d = mysqli_query($koneksi, "SELECT * FROM tb_penjualan WHERE id_pelanggan='$id_pelanggan'");


// $hasilCari = mysqli_fetch_assoc($d);


// //cek jika total > 0 maka tidak bisa dihapus
// if ($hasilCari['total'] > 0) {
//   echo "<script>alert('GAGAL HAPUS !!! DATA SUDAH DIPAKAI TRANSAKSI')</script>";
//   header('location: ?halaman=pendataan');
// } else {




//hapus barang berdasarkan id_pelanggan
$data = mysqli_query($koneksi, "DELETE FROM tb_penjualan WHERE id_pelanggan='$id_pelanggan'");


//hapus barang berdasarkan id_pelanggan 
$sql = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");



//jika berhasil kembali ke v_penjualan.php
if ($sql) {
  header('location: v_penjualan.php');
}