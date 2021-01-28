<?php
require 'function.php';
if (isset ($_POST["register"])){
    if( registrasi($_POST) > 0){
        echo "
            <script>
                alert('user baru berhasil di tambahkan!');
            </script>
       ";
    } else {
        echo mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
</head>
<body>

<h1>Halaman Registrasi</h1>
    <style>
        label {
            display: block;
        }
    </style>

<form action="" method="post">

    <ul>
        <li>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">konfirmasi password :</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>
</form>
    
</body>
</html>