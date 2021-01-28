<?php
// dipakai function
require 'function.php';

// ambil data di url 
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek apakah tombol submit sudah di tekan atau belum 
if( isset ($_POST["submit"])){

    // cek apakah data berhasil ditambahkan atau tidak
   if ( ubah($_POST) > 0 ){
       echo "
            <script>
                alert('data berhasil dirubah!');
                document.location.href = 'index.php';
            </script>
       ";
   } else {
        echo "
        <script>
            alert('data gagal dirubah!');
            document.location.href = 'index.php';
        </script>
        ";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah data mahasiswa</title>
</head>
<body>

    <h1>Ubah Data Mahasiswa</h1>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $mhs["id"];?>">
        <ul>
            <li>
                <label for="nrp">NRP :</label>
                <input type="text" name="nrp" id="nrp"  value="<?= $mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama"  value="<?= $mhs["nama"];?>">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"];?>">
            </li>
            <li>
            <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>