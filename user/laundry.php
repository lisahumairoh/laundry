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
    <title>Jenis Laundry</title>
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
            <br><br><br>
            <div class="tabel">
                    <table border="0" cellspacing="10" cell-padding="30px">
                        <tr>
                            <th colspan="6">Jenis Laundry</th>
                        </tr>
                        <tr>
                            <td>No</td>
                            <td>Jenis Laundry</td>
                            <td>Pengerjaan</td>
                            <td>Keterangan</td>
                            <td>Harga</td>
                            <td>Aksi</td>
                        </tr>
                    <?php 
                    $i= 1;
                    $sql = "SELECT * FROM laundry";
                    $query = mysqli_query($conn, $sql);
                    
                    while( $data = mysqli_fetch_array($query))
                    {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?>.<hr></td>
                            <td><?php echo $data['jenis'] ?><hr></td>
                            <td><?php echo $data['pengerjaan']?>hari<hr></td>
                            <td><?php echo $data['ket'] ?><hr></td>
                            <td><?php echo $data['harga'] ?><hr></td>
                            <td>
                                <a id="tblubah" href="transaksi.php?id_laundry=<?php echo "$data[id_laundry]"; ?>">Pilih</a>
                                <hr>
                            </td>
                           
                        </tr>
                    <?php } ?>
                    </table>
                </div>

        
    </div>
    <div class="footer">
            <h4>lisahumairohcopyright2020</h4>
        </div>
</body>
</html>