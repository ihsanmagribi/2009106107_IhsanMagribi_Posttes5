<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM crud");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PW IPM KALTIM</title>
        <link rel="icon" href="https://ipmboyolali.com/uploads/cover_blog/lambang_ipm.jpg">
        <link rel="stylesheet" href="css/ss.css">
    </head>
    <body>
        <header>
            <h2>PIMPINAN WILAYAH IPM KALTIM</h2>
        </header>

        <div class="list-table">
            <h3>Data Anggota PW IPM KALTIM</h3>
            <a href="form_data_anggota.php" class="tambah">Tambah Mahasiswa</a>
            <table>
                <tr class="thead">
                    <th>No</th>
                    <th nowrap>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Tanggal Lahir</th>
                    <th>No Telpon</th>
                    <th>Jabatan</th>
                    <th>Asal Pimpinan</th>
                    <th>TM</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['tanggal_lahir']?></td>
                    <td><?=$row['nohp']?></td>
                    <td><?=$row['jabatan']?></td>
                    <td><?=$row['asal_pimpinan']?></td>
                    <td><?=$row['tm']?></td>
                    <td class="">
                        <li><a href="edit.php?id=<?=$row['id'];?>" onclick=""><i class="home"></i>Edit</a></li>
                    </td>
                    <td class="">
                        <li><a href="hapus.php?id=<?=$row['id'];?>" onclick=""><i class="home"></i>Hapus</a></li>
                    </td>
                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>
        </div>
        
    </body>
</html>