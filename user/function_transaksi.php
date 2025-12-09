<?php 
include '../koneksi.php';
$id_user = $_POST['id_user'];
$id_laundry = $_POST['id_laundry'];
$tgl_transaksi = $_POST['tgl_transaksi'];
$jenis_laundry = $_POST['jenis_laundry'];
$tgl_ambil = $_POST['tgl_ambil'];
$waktu = $_POST['waktu'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];

$count = 0;
$count = $harga * $jumlah; 
$total = $count;

$sql = "INSERT INTO transaksi(id_user, id_laundry, tgl_transaksi, jenis_laundry, tgl_ambil, waktu, jumlah, total) VALUES ('$id_user', '$id_laundry', '$tgl_transaksi', '$jenis_laundry', '$tgl_ambil', '$waktu', '$jumlah', '$total')";

$query= mysqli_query($conn, $sql);
if($query){
    header('location:riwayat_transaksi.php');
} else {
    echo "gagal";
}






?>