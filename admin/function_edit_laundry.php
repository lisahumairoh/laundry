<?php
include '../koneksi.php';

$id_laundry = $_GET['id_laundry'];
$jenis      = $_POST['jenis'];
$ket        = $_POST['ket'];
$pengerjaan = $_POST['pengerjaan'];
$harga      = $_POST['harga'];

$sql = "UPDATE laundry SET jenis='$jenis', pengerjaan='$pengerjaan', ket='$ket', harga='$harga' WHERE id_laundry='$id_laundry'";

$query = mysqli_query($conn, $sql);

if ($query){
    header('location:laundry.php');
} else {
    echo 'gagal';
}



?>