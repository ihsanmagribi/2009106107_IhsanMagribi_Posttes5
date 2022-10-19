<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Anggota</title>
    <link rel="stylesheet" href="css/style_form.css">
    <script type="text/javascript" src="darkmode.js"></script>
    <link rel="icon" href="https://ipmboyolali.com/uploads/cover_blog/lambang_ipm.jpg">
</head>
<body>
    <div class="navbar">
        <img width="50" height="80" src="image/Logo_IPM.png" class="logo-navbar">
        <div class="navbar-logo">IKATAN PELAJAR MUHAMMADIYAH<br>KALIMANTAN TIMUR</div>
        <div class="navbar-list">
            <ul>
                <li><button onclick="myFunction()">dark mode</button></li>
                <li><a href="index.php" onclick=""><i class="home"></i>Home</a></li>
                <li><a href="profil.php" onclick=""><i class="profil"></i>Profil IPM KALTIM</a></li>
                <li><a href="seputaripm.php" onclick=""><i class="seputar"></i>Seputar IPM KALTIM</a></li>
                </ul>
            </div>
    </div>
    <div class="form">  
        <p class="judul" >FORM DATA ANGGOTA PW IPM KALTIM</p>
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
</body>
</html>