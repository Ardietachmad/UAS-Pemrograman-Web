<?php
    $host = "localhost"; // variabel alamat server MySQL
    $user = "root";      // variabel username akses MySQL
    $pass = "";          // variabel password akses MySQL sesuai username
    $dbname = "uas_toko_buah"; // variabel nama database yang akan digunakan
    
    try {
        // argumen untuk membuat koneksi dengan class PDO dengan variable diatas
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        // set the PDO error mode to exception
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
    }catch(PDOException $e){
        // menangani error saat koneksi
        echo "Connection failed: " . $e->getMessage();
    }
?>
