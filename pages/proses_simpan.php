<?php
    include '../koneksi/koneksi.php';
    
    $id             = $_POST['id'];
    $tglk           = date('Y-m-d');
    $np             = $_POST['np'];
    $ep             = $_POST['ep'];
    $sp             = $_POST['sp'];
    $ip             = $_POST['ip'];
    $kp             = $_POST['kp'];
    
    if($id == 0){ // cek id, jika nol (0) maka menggunakan query sql insert data ke table kontak_kami
        $query = "INSERT INTO `kontak_kami`
        (`id`,`tanggalkirim`,`namapengirim`,`emailpengirim`,`subjekpesan`,`isipesan`,`kategoripesan`)
        VALUES 
        ('$id','$tglk','$np','$ep','$sp','$ip','$kp')";
        $insertdata = $dbh->exec($query);
        $id_data = $dbh->lastInsertId();
        $flag = $id_data > 0 ? "successed" : "failed"; // cek proses simpan data berhasil atau tidak, jika nilai variabel $id_data > 0 maka berhasil tersimpan
    }    

    if($flag == "successed"){ // jika proses simpan data berhasil dilakukan
?>        
<script>
    alert("Data Berhasil Tersimpan.");
    window.location = "hubungi_kami.php";
</script>
<?php
    } else { // jika proses simpan data gagal dilakukan
?>
<script>
    alert("Data Gagal Tersimpan.");
    window.location = "proses_simpan.php?namapengirim=<?php echo $np;?>";
</script>
<?php
    }
?>

