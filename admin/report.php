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
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container">
            <div class="main">
                <div class="#tabel">
            <br><br><br>
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
    <script type="text/javascript">
    window.print()
</script>
</body>
</html>