<?php
    include '../koneksi/koneksi.php';
    
    $id             = $_POST['id'];
    $np             = $_POST['np'];
    $ep             = $_POST['ep'];
    $jk             = $_POST['jk'];
    $telp           = $_POST['telp'];
    $prov           = $_POST['prov'];
    $alm            = $_POST['alamat'];
    $pos            = $_POST['pos'];

    
    if($id == 0){ // cek id, jika nol (0) maka menggunakan query sql insert data ke table registrasi
        $query = "INSERT INTO `registrasi`
        (`id`,`nmlengkap`,`email`,`jnskelamin`,`provinsi`,`alamat`,`kodepos`,`nohp`)
        VALUES 
        ('$id','$np','$ep','$jk','$prov','$alm','$pos','$telp')";
        $insertdata = $dbh->exec($query);
        $id_data = $dbh->lastInsertId();
        $flag = $id_data > 0 ? "successed" : "failed"; // cek proses simpan data berhasil atau tidak, jika nilai variabel $id_data > 0 maka berhasil tersimpan
    }    

    if($flag == "successed"){ // jika proses simpan data berhasil dilakukan
?>        
<script>
    alert("Registrasi Anda Berhasil di Proses.");
    window.location = "../index.php";
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

