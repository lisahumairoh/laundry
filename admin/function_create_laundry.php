<?php 
include '../koneksi.php';

$jenis = $_POST['jenis'];
$pengerjaan = $_POST['pengerjaan'];
$ket = $_POST['ket'];
$harga = $_POST['harga'];

$sql = "INSERT INTO laundry(jenis, pengerjaan, ket, harga) VALUES ('$jenis', '$pengerjaan', '$ket', '$harga')";

$query = mysqli_query($conn, $sql);

if($query){
    header('location:laundry.php');
} else {
    echo 'gagal';
}



?>