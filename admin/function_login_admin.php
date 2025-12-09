<?php 
include '../koneksi.php';

session_start();
$username = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn, "SELECT * FROM admin WHERE username='$username' AND pass='$pass'");

$cek = mysqli_num_rows($login);

if($cek !=0){
    $_SESSION['username'] = $username;
    $_SESSION['id_user'] = $data['id_user'];
    $_SESSION['status'] = "login";
    header('location:home.php');
} else {
    echo "Username/password salah";
}

?>