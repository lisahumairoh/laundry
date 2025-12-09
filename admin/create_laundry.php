<?php
include "../koneksi.php";

session_start();
if($_SESSION['status'] == ""){
    header('location:login_admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Laundry</title>
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
               <div class="form">
                    <center><h3>Jenis Laundry</h3></center>
                    <form action="function_create_laundry.php" method="POST">
                    <div class="box-input">
                        <p><label for="">Jenis Laundry</label></p>
                        <input type="text" name="jenis" id="jenis">
                    </div>
                    <div class="box-input">
                        <p><label for="">Pengerjaan</label></p>
                        <input type="text" name="pengerjaan" id="pengerjaan">
                    </div>
                    <div class="box-input">
                        <p><label for="">Keterangan</label></p>
                        <input type="text" name="ket" id="ket">
                    </div>
                    <div class="box-input">
                        <p><label for="">Harga</label></p>
                        <input type="text" name="harga" id="harga">
                    </div>                   
                    <div class="box-input">
                        <input id="#tbltambahform" type="submit" value="Tambah" onclick="return confirm('Data Berhasil Ditambah')">
                    </div>
                    <br><br>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>