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
    <title>Edit Data Laundry</title>
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
                    <?php 
                        $id_laundry = $_GET['id_laundry'];
                        $sql        = "SELECT * FROM laundry WHERE id_laundry = '$id_laundry'";
                        $query      = mysqli_query($conn, $sql);
                        $data       = mysqli_fetch_array($query);
                    ?>
                    <center><h3>Paket Laundry</h3></center>
                    <form action="function_edit_laundry.php?id_laundry=<?php echo "$id_laundry";?>" method="POST">
                    <div class="box-input">
                        <p><label for="">Jenis Laundry</label></p>
                        <input type="text" name="jenis" id="jenis" value="<?php echo $data['jenis']?>">
                    </div>
                    <div class="box-input">
                        <p><label for="">Pengerjaan</label></p>
                        <input type="text" name="pengerjaan" id="pengerjaan" value="<?php echo $data['pengerjaan']?>">
                    </div>
                    <div class="box-input">
                        <p><label for="">Jumlah</label></p>
                        <input type="text" name="ket" id="ket" value="<?php echo $data['ket']?>">
                    </div>
                    <div class="box-input">
                        <p><label for="">Harga</label></p>
                        <input type="text" name="harga" id="harga" value="<?php echo $data['harga']?>">
                    </div>                   
                    <div class="box-input">
                        <input id="tblubah" type="submit" value="Edit">
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>