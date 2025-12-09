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
    <title>Detail Transaksi</title>
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
            <br><br>
                   <table border="0px" cellspacing='10' cellpadding="30">
                    <?php 
                    $id = $_GET['id_transaksi'];
                    $sql = "SELECT * FROM transaksi, laundry, user WHERE id_transaksi = '$id' AND laundry.id_laundry=transaksi.id_laundry AND user.id_user=transaksi.id_user";
                    $query = mysqli_query($conn, $sql);
                    $data = mysqli_fetch_array($query);                  
                    ?>
                        <tr collspan="3">
                            <th colspan="3">Detail Transaksi</th>
                        </tr>
                        <tr>
                            <td>Tanggal Transaksi</td>
                            <td>:</td>
                            <td><?php echo $data['tgl_transaksi'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><?php echo $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $data['alamat'] ?></td>
                        </tr><tr>
                            <td>no telp</td>
                            <td>:</td>
                            <td><?php echo $data['no_telp'] ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td><?php echo $data['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Laundry</td>
                            <td>:</td>
                            <td><?php echo $data['jenis_laundry']?></td>
                        </tr>
                        <tr>
                            <td>Keterangan Laundry</td>
                            <td>:</td>
                            <td><?php echo $data['ket']?></td>
                        </tr>
                        <tr>
                            <td>Pengerjaan</td>
                            <td>:</td>
                            <td><?php echo $data['pengerjaan']?> hari</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td><?php echo $data['harga'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengambilan</td>
                            <td>:</td>
                            <td><?php echo $data['tgl_ambil'] ?></td>
                        </tr>
                        <tr>
                            <td>waktu</td>
                            <td>:</td>
                            <td><?php echo $data['waktu'] ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah</td>
                            <td>:</td>
                            <td><?php echo $data['jumlah'] ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp.<?php echo $data['total'] ?></td>
                        </tr>
                    </table>           
    </div>
    </div>
    <div class="footer">
        <h4>lisahumairohcopyright2020</h4>
    </div>
</div>
</body>
</html>