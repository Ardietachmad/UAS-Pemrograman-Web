<?php
    error_reporting(0);
    include '../koneksi/koneksi.php';

    // query SQL untuk mengambil data dari table buah
    $query = "select * from buah";
    
    // mengambil nilai variabel search dari proses pencarian
    $search = $_REQUEST['search'];
    
    if($search != ""){ // cek apakah ada nilai parameter search yang di kirim, jika ada maka ditambahkan query untuk where di query sql, berdasarkan Kode Buah atau Nama Buah
        $where = " where (kodebuah like '%".$search."%' or namabuah like '%".$search."%')";
    }
    
    // eksekusi query SQL menggunakan koneksi database PDO
    $result = $dbh->query($query.$where);        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Kami | Toko Buah ABC</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/logo.png">
</head>
<body>
    <fieldset>
    <table width="100%" align="center" style="border-collapse: collapse;">
        
        <tr>
            <td class="menu">
                <a href="../index.php" class="linkmenu">Home</a>
                <a href="produk_kami.php" class="linkmenu">Produk Kami</a>
                <a href="hubungi_kami.php" class="linkmenu">Hubungi Kami</a>
                <a href="registrasi.php" class="linkmenu">Registrasi</a>
            </td>
        </tr>
        <tr>
            <td class="content">
                <center>
                    <h1>Daftar Buah</h1>
                    
                    <table border="0" align="center"  width="80%" cellpadding="2" style="border-collapse: collapse">
      
                        <tr><td></td></tr>
                        <tr>
                            <td align="center" class="search">
                                <input type="text" class="rowsData place" placeholder="Cari buah mu" name="caridata" id="caridata" size="40"  value="<?php echo isset($search) ? $search : "";?>"> &nbsp; 
                                <input type="button" value="Cari" class="tombol message1" onclick="cariData()">
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td></tr>
                        <tr>
                            <td>
                                <table border="1" align="center" width="100%" cellpadding="3" style="border-collapse: collapse">
                                    <tr>
                                        <th width="5%" class="colTitle">Produk</th>
                                        <th width="10%" class="colTitle">Deskripsi</th>
                                    </tr>
                                    <?php
                                        
                                        // melakukan perulangan data hasil dari eksekusi query SQL table buah
                                        while($data = $result->fetch()){
                                    ?>
                                    <tr>
                                        <!-- menampilkan isi data yg di ulang ke dalam kolom -->
                                        <td class="rowsData" align="center"><?php echo "<img src='../assets/images/$data[gambarbuah]' width='185' height='160'>";?></td>
                                        <td class="rowsData" align="left">
                                            <p class="title_menu">Kode Buah : (<?php echo $data['kodebuah'];?>) <?php echo $data['namabuah'];?></p>
                                            <p class="title_menu">Harga Buah : <?php echo $data['hargabuah'];?>/kg</p>
                                            <p class="title_menu">Jenis Buah : <?php echo strtoupper($data['jenisbuah']);?></p>
                                            <?php
                                                if($data['readystock'] > 0) {
                                                    $stock = "<b>Tersedia</b>";
                                                } else {
                                                    $stock = "<b style='color:red'>Kosong</b>";
                                                }
                                            ?>
                                            <p class="title_menu">Ketersediaan Stock : <?php echo $stock;?></p>
                                        </td>
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </table>
                            </td>
                        </tr>
                    </table>
                </center>

            </td>
        </tr>
        <tr>
        <?php include '../template/footer.php'?>
        </tr>
    </table>

    <script>
        function cariData(){
            var keyword = document.getElementById('caridata').value;
            window.location = "produk_kami.php?search=" + keyword;
        }
    </script>
    </fieldset>
</body>
</html>