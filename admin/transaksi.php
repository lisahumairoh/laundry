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
    <title>Transaksi</title>
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
                <br>    
                <div class="tabel">
                    <table border="1" cellspacing="0" cellpadding="10">
                        <tr>
                            <th colspan="8">Transaksi</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jenis Laundry</th>
                            <th>Tanggal ambil</th>
                            <th>Waktu</th>
                            <th>Jumlah</th>
                            <th>Total</th>
                            <th>aksi</th>
                        </tr>
                    <?php 
                    $i= 1;
                    $sql = "SELECT * FROM transaksi";
                    $query = mysqli_query($conn, $sql);
                    
                    while( $data = mysqli_fetch_array($query))
                    {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?>.</td>
                            <td><?php echo $data['tgl_transaksi'] ?></td>
                            <td><?php echo $data['jenis_laundry']?></td>
                            <td><?php echo $data['tgl_ambil'] ?></td>
                            <td><?php echo $data['waktu'] ?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><?php echo $data['total'] ?></td>

                            <td>
                                <a id="tbldetail" href="detail_transaksi.php?id_transaksi=<?php echo "$data[id_transaksi]"; ?>">Detail</a>

                            </td>
                           
                        </tr>
                    <?php } ?>
                    </table>
                </div>

            </div>
        </div>
        
    </div>
</body>
</html>