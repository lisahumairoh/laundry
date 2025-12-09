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
    <title>Cuci! Beranda</title>
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
    
                    
           <div class="form">
                    <?php 
                        $id_user = $_SESSION['id_user'];
                        $sql        = "SELECT * FROM user WHERE id_user = '$id_user'";
                        $query      = mysqli_query($conn, $sql);
                        $data       = mysqli_fetch_array($query);
                    ?>
                    <center><h3>Data Diri</h3></center>
                    <form action="function_edit_akun.php?id_user=<?php echo "$id_user";?>" method="POST">
                    <div class="box-input">
                        <p><label for="">Username</label></p>
                        <input type="text" name="username" id="username" value="<?php echo $data['username']?>">
                    </div>
                    <div class="box-input">
                        <p><label for="">Nama</label></p>
                        <input type="text" name="nama" id="nama" value="<?php echo $data['nama']?>">
                    </div>
                    <div class="box-input">
                        <p><label for="">Alamat</label></p>
                        <input type="text" name="alamat" id="alamat" value="<?php echo $data['alamat']?>">
                    </div>
                    <div class="box-input">
                        <p><label for="">No Telp</label></p>
                        <input type="text" name="no_telp" id="no_telp" value="<?php echo $data['no_telp']?>">
                    </div>        
                    <div class="box-input">
                        <p><label for="">Email</label></p>
                        <input type="text" name="email" id="email" value="<?php echo $data['email']?>">
                    </div>            
                    <div class="box-input">
                        <input id="tblubah" type="submit" value="Edit">
                    </div>
                    </form>
                </div>
            
                
    </div>

        <div class="footer">
            <h4>lisahumairohcopyright2020</h4>
        </div>
    
    </div>
</body>
</html>