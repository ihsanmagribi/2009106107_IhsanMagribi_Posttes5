<?php 

require 'config.php';

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nohp = $_POST['nohp'];
    $jabatan = $_POST['jabatan'];
    $asal_pimpinan = $_POST['asal_pimpinan'];
    $tm = $_POST['tm'];

    $kirim = mysqli_query($db, "INSERT INTO crud (nama,email,tanggal_lahir,nohp,jabatan,asal_pimpinan,tm) VALUES ('$nama','$email','$tanggal_lahir','$nohp','$jabatan','$asal_pimpinan','$tm')");

    if($kirim){
        // echo "<script> alert('Data Berhasil Dikirim');</script>";
        header("Location:tampil_data.php");
    }else {
        echo "gagal mengirim";
    }
}