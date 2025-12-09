<?php 
include '../koneksi.php';

session_start();
if($_SESSION['status'] == ""){
    header('location:../login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuci! Beranda</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <header class="header">
                <a href="#" class="logo">Cuci!</a>
            <ul>
                <li><a href="home.php">Beranda</a></li>
                <li><a href="laundry.php">Laundry Sekarang</a></li>
                <li><a href="riwayat_transaksi.php">Riwayat</a></li>
                <li><a href="akun.php">Akun</a></li>
                <li><a href="../logout.php">Logout</a></li>
            </ul>
        </header>
        <div class="slogan">
            <div class="gambar posisi">
                <!-- <img src="Laundry.gif" alt="" width=""> -->
            </div>
            <div class="kata posisi">
                <h2>Ayo <span>Laundry</span> di Cuci!</h2>
                <h3>bingung <span>ya yaa yaaa!</span></h3>
            </div>
        </div>
        <div class="footer">
            <h4>lisahumairohcopyright2020</h4>
        </div>
    </div>
</body>
</html>