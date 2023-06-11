<?php 
include 'koneksi_barang.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js”></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <title>Tambah</title>
</head>
<body>
    <H2>MENAMBAHKAN BARANG </H2>
    <form action="simpan_barang.php" method="post">
        <table>
            <tr>
                <td>
                    <label id="id_barang">id barang</label><br>
                    <input type="text" name="id_barang"><br>
                </td>
            <tr>
                <td>
                    <label id="nama_barang">Nama Barang</label><br>
                    <input type="text" name="nama_barang"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="keterangan">Keterangan</label><br>
                    <input type="text" name="keterangan"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="input" onclick="return confirm('simpan data?')" >Input</button>
                    <button type="reset" name="batal">batal</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>