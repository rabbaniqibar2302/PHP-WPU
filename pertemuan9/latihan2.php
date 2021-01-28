<?php
//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) || 
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])){
    //fungsinya buat mencegah untuk masuk lewat url untuk mengakses halaman ini
    //redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>" ></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nrp"];?></li>
        <li><?= $_GET["email"];?></li>
        <li><?= $_GET["jurusan"];?></li>
    </ul>

    <a href="latihan1.php">Kembali Ke Menu</a>
</body>
</html>
