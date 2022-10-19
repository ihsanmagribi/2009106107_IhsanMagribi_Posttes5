<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_form.css">
    <title>PW IPM KALTIM</title>
    <link rel="icon" href="https://ipmboyolali.com/uploads/cover_blog/lambang_ipm.jpg">
</head>
<body>
    <header>
        <h2>DATA ANGGOTA PW IPM KALTIM</h2>
    </header>
    
    <div class="form-class">
        <h3>Tambah Data Anggota</h3>
        <form action="tambah.php" method="post">
            
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" class="form-text"><br>
            
            <label for="">Email</label><br>
            <input type="email" name="email" class="form-text"><br>

            <label for="">Tanggal Lahir</label><br>
            <input type="date" name="tanggal_lahir" class="form-text"><br>
            
            <label for="">Nomor HP</label><br>
            <input type="text" name="nohp" class="form-text"><br>

            <label for="">Jabatan</label><br>
            <input type="text" name="jabatan" class="form-text"><br>

            <label for="">Asal Pimpinan</label><br>   
            <input type="text" name="asal_pimpinan" class="form-text"><br>
            <label for="">Alamat</label><br>
            <textarea name="alamat" id="" cols="135" rows="5"></textarea><br>

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>