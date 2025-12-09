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
    <title>Laporan</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
        <header class="header-admin">
            <p class="logo-white">Cuci</p>
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
                <div class="#tabel">
            <br><br>
                <a id="tblubah" href="report.php" target=" _blank">Export</a>
                <table border="1"  cellpadding="50px" cellspacing="0">
                    <tr collspan="8">
                            <th colspan="8">Laporan</th>
                        </tr>
                    <tr>
                    <th>No</th>
                    <th>tgl</th>
                    <th>Nama</th>
                    <th>Jenis Laundry</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    </tr>
                    
                    <?php 
                    $i= 1;
                    $subtotal= 0;
                    $query = mysqli_query($conn, "SELECT * FROM user, transaksi, laundry WHERE user.id_user=transaksi.id_user AND user.id_user=transaksi.id_user  AND laundry.id_laundry=transaksi.id_laundry ");
                    while ( $data = mysqli_fetch_array($query) )
                     {
                        $subtotal += $data['total'];
                    ?>  
                        <tr>
                            <td><?php echo $i++;?>.</td>
                            <td><?php echo $data['tgl_transaksi'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['jenis_laundry']?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><?php echo $data['harga'] ?></td>
                            <td><?php echo $data['total'] ?></td>
                        </tr>
                    <?php } ?>
                     <tr>
                            <td colspan="6">Subtotal</td>
                            <td>Rp.<?php echo $subtotal;?></td>
                        </tr>
                    </table>
                </div>   

            </div>
        </div>
        
    </div>
</body>
</html>