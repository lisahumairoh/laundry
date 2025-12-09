<?php
include "../koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Admin</title>
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
                    <center><h3>Tambah Admin</h3></center>
                    <form action="function_create_admin.php" method="POST">
                    <div class="box-input">
                        <p><label for="">Username</label></p>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="box-input">
                        <p><label for="">Password</label></p>
                        <input type="text" name="pass" id="pass">           
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