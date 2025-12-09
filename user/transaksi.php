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
    <title>Transaksi</title>
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
                    include '../koneksi.php';

                    $id_laundry = $_GET['id_laundry'];
                    $sql  = "SELECT * FROM laundry WHERE id_laundry='$id_laundry'";
                    $query = mysqli_query($conn, $sql);
                    $data  = mysqli_fetch_array($query);

                    
                ?>
                    <center><h3>Jasa Laundry</h3></center>
                    <form action="function_transaksi.php" method="POST">
                    <div class="box-input">
                        <input type="hidden" name="id_user" id="id_user" value="<?php echo $_SESSION['id_user'] ?>" readonly>
                    </div>
                     <div class="box-input">
                        <input type="hidden" name="id_laundry" id="id_laundry" value="<?php echo $data['id_laundry'] ?>" readonly>
                    </div>
                    <div class="box-input">
                        <p><label for="">Tanggal Transaksi</label></p>
                        <input type="date" name="tgl_transaksi" id="tgl_transaksi" value="<?php echo date('yy-m-d'); ?>" readonly>
                    </div>
                    <div class="box-input">
                        <p><label for="">Jenis Laundry</label></p>
                        <input type="text" name="jenis_laundry" id="jenis_laundry" value="<?php echo $data['jenis'] ?>" readonly>
                    </div>
                      <div class="box-input">
                        <p><label for="">Keterangan</label></p>
                        <input type="text" name="ket" id="ket" value="<?php echo $data['ket'] ?>" readonly>
                    </div>
                    <div class="box-input">
                        <p><label for="">Tanggal Pengambilan</label></p>
                        <input type="date" name="tgl_ambil" id="tgl_ambil">
                    </div>                  
                    <div class="box-input">
                        <p><label for="">Waktu Pengambilan</label></p>
                        <select name="waktu" id="waktu">
                            <option value="Pagi (08.00 - 10.00)">--Pilih--</option>
                            <option value="Pagi (08.00 - 10.00)">Pagi (08.00 - 10.00)</option>
                            <option value="Sore (15.00 - 17.00)">Sore (15.00 - 17.00)</option>
                        </select>
                    </div>
                     <div class="box-input">
                        <p><label for="">Jumlah</label></p>
                        <input type="text" name="jumlah" id="jumlah"> 
                    </div>
                    <div class="box-input">
                        <p><label for="">Harga</label></p>
                        <input type="text" name="harga" id="harga" value="<?php echo $data['harga'] ?>" readonly>
                    </div>
                     <!-- <div class="box-input">
                        <p><label for="">Total</label></p>
                        <input type="text" name="total" id="tgl_antar">
                    </div> -->
                    <div class="box-input">
                        <input id="tbltambahform" type="submit" value="Tambah">
                    </div>
                    <br><br>
                    </form>
                </div>
        </div>
        <div class="footer">
            <h4>lisahumairohcopyright2020</h4>
        </div>
    </div>
</body>
</html>