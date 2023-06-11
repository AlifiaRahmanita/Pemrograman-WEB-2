<?php
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "" method="get">
        Nama: <input type="text" neme="nama">
        Alamat: <input type="text" neme="alamat"><br><br>
        <input type="submit" value="submit">
    </form>

    Selamat Datang <?php echo $_GET["nama"]; ?><br>
    Alamat Kamu <?php echo $_GET["alamat"]; ?><br>
</body>
</html>