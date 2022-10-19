<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM crud WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['simpan'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $nohp = $_POST['nohp'];
        $jabatan = $_POST['jabatan'];
        $asal_pimpinan = $_POST['asal_pimpinan'];
        $tm = $_POST['tm'];
        $update = mysqli_query($db, "UPDATE crud SET nama='$nama', email='$email', tanggal_lahir='$tanggal_lahir', nohp='$nohp', jabatan='$jabatan', asal_pimpinan='$asal_pimpinan', tm='$tm' WHERE id='$id'");

        if($update){
            header("Location:tampil_data.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PW IPM KALTIM</title>
    <link rel="stylesheet" href="css/style_form.css">
</head>
<body>
    <header>
        <h2></h2>
    </header>
    
    <div class="form-class">
        <h3>Edit Data Anggota</h3>
        <form action="tambah.php" method="POST">
            <table border = "0">
                <tr>
                    <td>Nama</td>
                    <td><input type="text"  name="nama" maxlength="50" placeholder="Nama Anda"  required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text"  name="email" maxlength="50" placeholder="Email Aktif"  required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" id="date-picker" name="tanggal_lahir" required ></td>       
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td><input id="isian-telpon" type="tel" name="nohp" placeholder="Nomor HP"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td><input type="text"  name="Jabatan" maxlength="50" placeholder="Jabatan Sekarang"  required></td>
                </tr>
                <tr>
                    <td>Asal Pimpinan Daerah</td>
                    <td>
                    <select class="choose" name="asal_pimpinan">
                        <option value="Samarinda">Samarinda</option>
                        <option value="Balikpapan">Balikpapan</option>
                        <option value="Penajam Paser Utara">Penajam Paser Utara</option>
                        <option value="Kutai Kertanegara">Kutai Kertanegara</option>
                        <option value="Berau">Berau</option>
                        <option value="Paser">Paser</option>
                        <option value="Bontang">Bontang</option>
                        <option value="Kutai Timur">Kutai Timur</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Pengkaderan Terakhir</td>
                    <td>
                    <select class="choose" name="tm">
                        <option value="TM1">TM1</option>
                        <option value="TM2">TM2</option>
                        <option value="TM3">TM3</option>
                        <option value="TM Utama">TM Utama</option>
                    </select>
                    </td>
                </tr>  
                <tr>
                    <td colspan="1">
                        <button type="submit" name="simpan"><i class="fa fa-check-circle"></i>SIMPAN</button>
                    </td>
                </tr>   
        </table>
        </form>
    </div>
    </div>

</body>
</html>