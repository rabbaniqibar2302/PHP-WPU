<?php
// $_GET 
$mahasiswa = [
    [
        "nrp" => "10200067",
        "nama" => "Muhammad Rizqi Akbar Rabbani",
        "email" => "hasqibar@digitalinteraktif.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "qibar.jpg"
    ],
    [
        "nrp" => "10200077",
        "nama" => "Rohan Ganteng Bingits",
        "email" => "rohan@digitalinteraktif.com",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "gambar" => "rohan.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"];?>
                    &nrp=<?= $mhs["nrp"];?>
                    &email=<?= $mhs["email"];?>
                    &jurusan=<?= $mhs["jurusan"];?>
                    &gambar=<?= $mhs["gambar"];?>"
                    ><?= $mhs["nama"];?></li>
            </a>
        </ul>
<?php endforeach; ?>    
</ul>
</body>
</html>