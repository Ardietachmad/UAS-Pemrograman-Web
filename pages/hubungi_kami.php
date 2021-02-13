<?php
    include '../koneksi/koneksi.php';
    
    $kdbuah = isset($_GET['kodebuah']) ? $_GET['kodebuah'] : 0;    
    
    $query = "select * from buah where kodebuah = '" . $kdbuah . "'";
    $data = $dbh->query($query)->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami | Toko Buah ABC</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/images/logo.png">
</head>
<body>
    <fieldset>
    <table width="100%" align="center" style="border-collapse: collapse;">
        
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
                    <h1>Hubungi Kami</h1>
                    
                    <form name="formHubungi" method="post" action="proses_simpan.php" onsubmit="return validateForm()">
                        <input type="hidden" name="id" value="<?php echo isset($data['id']) ? $data['id'] : 0;?>" disabled>
                        <table border="0" align="center" width="50%" cellpadding="3" style="border-collapse: collapse">
                            <tr>
                                <td class="colTitle" width="25%">Nama Lengkap</td>
                                <td class="colTitle" width="2%">:</td>
                                <td width="79%" class="search"><input type="text" class="rowsData place" id="np" name="np" size="30"></td>
                            </tr>
                            <tr>
                                <td class="colTitle">Email</td>
                                <td class="colTitle">:</td>
                                <td class="search"><input type="email" class="rowsData place" id="ep" name="ep" size="30" ></td>
                            </tr>
                            <tr>
                                <td class="colTitle">Kategori</td>
                                <td class="colTitle">:</td>
                                <td class="search place">
                                    <select id="kp" name="kp" class="rowsData" >
                                        <option value="" disabled selected style="text-align: center;">-- Pilih Kategori --</option>
                                        <?php
                                            $query = "select * from kategori_pesan";
                                            $rs = $dbh->query($query);
                                            while($rows = $rs->fetch()){
                                                $selected = "";
                                                if($data['namakategori'] == $rows['kodekategori']){
                                                    $selected = "selected";
                                                }
                                        ?>
                                        <option value="<?php echo $rows['kodekategori'];?>" <?php echo $selected;?>><?php echo $rows['namakategori'];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="colTitle">Subjek Pesan</td>
                                <td class="colTitle">:</td>
                                <td class="search"><input type="text" class="rowsData place" id="sp" name="sp" size="30"></td>
                            </tr>
                            <tr>
                                <td class="colTitle">Isi Pesan</td>
                                <td class="colTitle">:</td>
                                <td class="search">
                                    <textarea class="rowsData place" id="ip" name="ip" rows="8" cols="50"></textarea>
                            </tr>
                            
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="submit" class="tombol message2" value="Kirim Pesan">&nbsp;
                                    <input type="reset" class="tombol message" value="Batal">
                                </td>
                            </tr>
                        </table>
                    </form>
                </center>

            </td>
        </tr>
        <tr>
        <?php include '../template/footer.php'?>
        </tr>
    </table>

    <!-- Javascript Custom -->
    <script src="../assets/js/script.js"></script>
    </fieldset>
</body>
</html>