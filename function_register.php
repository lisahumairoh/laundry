<?php 
include 'koneksi.php';

if($_POST){
$username  = $_POST['username'];
$pass      = $_POST['pass'];
$nama      = $_POST['nama'];
$alamat    = $_POST['alamat'];
$no_telp   = $_POST['no_telp'];
$email     = $_POST['email'];


$sql = "INSERT INTO `user`(`username`, `pass`, `nama`, `alamat`, `no_telp`, `email`) VALUES ('$username', '$pass', '$nama', '$alamat', '$no_telp', '$email')";

$query = mysqli_query($conn, $sql);
    if ($query){
        header('location:user/home.php');
    } else {
        echo "gagal";
    }
}
?>