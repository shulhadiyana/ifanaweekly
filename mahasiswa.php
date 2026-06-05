<?php

    require "fungsi.php";

    $qmhs = "SELECT * FROM mahasiswa";

    $mahasiswas = tampildata($qmhs); //array isinya data mahasiswa

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa | Informatika</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
        <h1>Informatika 2026</h1>
        <table border="1" cellspacing="0" cellpadding="10px">
            <tr>
                <td><a href = "index.php"> Home</a></td>
                <td><a href= "Profile.php"> Profile</a></td>
                <td><a href= "contact.php">Contact</a></td>
                <td><a href= "mahasiswa.php"> data Mahasiswa</a></td>
            </tr>
        </table>
        <br>
    <hr/>
    <h2>Data Mahasiswa</h2>
    <a href="tambahdata.php">
        <button>Tambah Data</button>
    </a>
    <table border="1" cellpadding="10px">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No.HP</th>
            <th>foto</th>
            <th>Aksi</th>
        </tr>
        <?php
            $i = 1;
          foreach($mahasiswas as $mhs) //array mahasiswas data mhs
            {
        ?>

        <tr>
            <td align="center"><?= $i?></td>
            <td><?= $mhs["nama"]?></td>
            <td><?= $mhs["nim"]?></td>
            <td><?= $mhs["jurusan"]?></td>
            <td><?= $mhs["Email"]?></td>
            <td><?= $mhs["no_hp"]?></td>
            <td><img src="assets/images/<?= $mhs["foto"]?>" alt="foto" width="60px"></td>
            <td>
                <a herf="editdata.php"><button>Edit</button></a> | <a herf="deletedata.php">Hapus</button></a>
            </td>
        </tr>
        <?php
            $i++;
            }
        ?>
    </table>
    <hr/>
    <br>
    <table border="1" cellpadding="10px">
        <tr>
            <th>1,1</th>
            <th>1,2</th>
            <th>1,3</th>
            <th>1,4</th>
        </tr>
        <tr>
            <th>2,1</th>
            <th rowspan="2" colspan="2">2,2(2.3, 3.2, 3.3)</th>
            <th>2,4</th>
        </tr>
        <tr>
            <th>3,1</th>
            <th>3,4</th>
        </tr>
        <tr>
            <th>4,1</th>
            <th>4,2</th>
            <th>4,3</th>
            <th>4,4</th>
        </tr>
    </table>
</body>
</html>