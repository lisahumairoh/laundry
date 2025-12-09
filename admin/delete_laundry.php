<?php
include '../koneksi.php';

$id_laundry = $_GET['id_laundry'];
$sql = "DELETE FROM laundry WHERE id_laundry='$id_laundry'";
$query = mysqli_query($conn, $sql);

if ($query){
    header('location:laundry.php');
} else {
    echo 'gagal';
}   



?>