<?php
include "../koneksi.php";

session_start();
if($_SESSION['status'] == " "){
    header('location:login_admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <header class="header-admin">
            <p class="logo-white">Cuci!</p>
        </header>
        <div class="content-admin">
            <div class="sidebar">
                <ul>
                    <li><a href="home.php">Beranda</a></li>
                    <li><a href="admin.php">Admin</a></li>
                    <li><a href="user.php">Pelanggan</a></li>
                    <li><a href="laundry.php">Jenis Laundry</a></li>
                    <li><a href="transaksi.php">Transaksi</a></li>
                    <li><a href="laporan.php">Laporan</a></li>
                    <li><a href="logout_admin.php">Logout</a></li>

                </ul>
            </div>
            <div class="main">
                <h1 class="pembuka">Ayo Laundry Dicuci!</h1>
            </div>
        </div>
        
    </div>
</body>
</html>