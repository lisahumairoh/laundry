
<?php 
include '../koneksi.php';

if($_POST){
$username  = $_POST['username'];
$pass      = $_POST['pass'];


$sql = "INSERT INTO `admin`(`username`, `pass`) VALUES ('$username', '$pass')";

$query = mysqli_query($conn, $sql);
    if ($query){
        header('location:admin.php');
    } else {
        echo "gagal";
    }
}
?>