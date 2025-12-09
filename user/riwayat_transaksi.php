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
    <title>Riwayat</title>
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
    <div class="content">
        <div class="#tabel">
            <br><br><br>
            <h3>Pembayaran Laundry</h3>
            <p>Pembayaran laundry dilakukan dengan cara COD(cash on delivery)</p>
            <p>Dengan membayar langsung ke kurir laundry dan anda akan mendapatkan bukti pembayaran</p>
            <br>
                <table border="0"  cellpadding="50px" cellspacing="9">
                    <tr collspan="8">
                            <th colspan="8">Riwayat Laundry Anda</th>
                    </tr>
                    <tr>
                    <th>No</th>
                    <th>Tanggal transaksi</th>
                    <th>Nama</th>
                    <th>Jenis Laundry</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                    </tr>
                    
                    <?php 
                    $i= 1;
                    $id_user = $_SESSION['id_user'];
                    $query = mysqli_query($conn, "SELECT * FROM user, transaksi, laundry WHERE user.id_user='$id_user' AND user.id_user=transaksi.id_user  AND laundry.id_laundry=transaksi.id_laundry ");
                    while ( $data = mysqli_fetch_array($query) )
                     {
                    ?>  
                        <tr>
                            <td><?php echo $i++;?>.</td>
                            <td><?php echo $data['tgl_transaksi'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['jenis_laundry']?></td>
                            <td><?php echo $data['jumlah'] ?></td>
                            <td><?php echo $data['harga'] ?></td>
                            <td>Rp.<?php echo $data['total'] ?></td>
                            <td><a id="btnriwayat" href="detail_transaksi.php?id_transaksi=<?php echo "$data[id_transaksi]"; ?>">Detail</a></td>
                        </tr>
                        

                    <?php } ?>
                    </table>
                </div>   
    </div>
    <div class="footer">
        <h4>lisahumairohcopyright2020</h4>
    </div>      
    </div>
   
</body>
</html>