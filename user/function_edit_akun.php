<?php
include '../koneksi.php';

$id_user   = $_GET['id_user'];
$nama      = $_POST['nama'];
$alamat        = $_POST['alamat'];
$no_telp   = $_POST['no_telp'];
$email     = $_POST['email'];

$sql = "UPDATE user SET nama='$nama', alamat='$alamat', no_telp='$no_telp', email='$email' WHERE id_user='$id_user'";

$query = mysqli_query($conn, $sql);

if ($query){
    header('location:akun.php');
} else {
    echo 'gagal';
}



?>