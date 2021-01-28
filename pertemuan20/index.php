<?php
session_start();
if ( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'function.php';

//pagination
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

//tombol cari ditekan

if( isset($_POST["cari"]) ){
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" id="" size="50" autofocus 
    placeholder="masukan keyword pencarian!" autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>
<br><br>

<!-- navigasi -->
<?php if($halamanAktif > 1):?>
    <a href="?halaman=<?= $halamanAktif - 1;?>">&laquo;</a>
<?php endif;?>

    <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
        <?php if( $i == $halamanAktif) :?>
            <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color:red;"><?= $i; ?></a>
        <?php else : ?>    
            <a href="?halaman=<?= $i; ?>" ><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

<?php if($halamanAktif < $jumlahHalaman):?>
    <a href="?halaman=<?= $halamanAktif + 1;?>">&raquo;</a>
<?php endif;?>
<br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <td>No.</td>
            <td>Aksi</td>
            <td>Gambar</td>
            <td>NRP</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Jurusan</td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach( $mahasiswa as $row) :?>
        <tr>
            <td><?= $i?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]?>">ubah</a>
                <a href="hapus.php?id=<?= $row["id"]?>" 
                onclick="return confirm ('yakin ngab?');">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]?>" alt="" width="100"></td>
            <td><?= $row["nrp"]?></td>
            <td><?= $row["nama"]?></td>
            <td><?= $row["email"]?></td>
            <td><?= $row["jurusan"]?></td>
        </tr>
        <?php $i++ ?>
        <?php endforeach;?>
    </table>
</body>
</html>