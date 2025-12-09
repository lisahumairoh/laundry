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
    <title>Akun Cuci! </title>
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
                <table border="0"  cellpadding="50px" cellspacing="9">
                    
                    <?php 
                    $id_user = $_SESSION['id_user'];
                    $query = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user'");
                    while ( $data = mysqli_fetch_array($query) )
                     {
                    ?>  
                        <tr collspan="3">
                            <th colspan="3">Detail Akun</th>
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
                        

                    <?php } ?>
                    </table>
                    <a id="tblhapus" href="edit_akun.php?id_user=<?php echo "$data[id_user]"; ?>">Ubah Data</a>

                </div>   
    </div>
        <div class="footer">
            <h4>lisahumairohcopyright2020</h4>
        </div>      
    </div>
</body>
</html>