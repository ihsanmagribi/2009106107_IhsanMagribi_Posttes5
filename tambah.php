<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nohp = $_POST['nohp'];
    $jabatan = $_POST['jabatan'];
    $asal_pimpinan = $_POST['asal_pimpinan'];
    $alamat = $_POST['alamat'];

    $kirim = mysqli_query($db, "INSERT INTO mahasiswa (nama,nim,email,telpon,alamat) VALUES ('$nama','$email','$tanggal_lahir','$nohp','$jabatan','$asal_pimpinan','$alamat')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:index.php");
    }else {
        echo "gagal mengirim";
    }
}