<?php 
include '../koneksi.php';

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
    <title>Pelanggan</title>
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
                <div class="tabel">
                    <table border="1px" cell-padding="30px" cellspacing="0">
                        <tr>
                            <th colspan="6">Daftar Nama Pelanggan</th>
                        </tr>
                        <tr>
                            <th>No</th>
                            <th>Username</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No telp</th>
                            <th>Email</th>
                        </tr>
                    <?php 
                    $i= 1;
                    $sql = "SELECT * FROM user";
                    $query = mysqli_query($conn, $sql);
                    
                    while( $data = mysqli_fetch_array($query))
                    {
                    ?>
                        <tr>
                            <td><?php echo $i++; ?>.</td>

                            <td><?php echo $data['username'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td><?php echo $data['no_telp'] ?></td>
                            <td><?php echo $data['email'] ?></td>
                          
                        </tr>
                    <?php } ?>
                    </table>
                </div>

            </div>
        </div>
        
    </div>
</body>
</html>