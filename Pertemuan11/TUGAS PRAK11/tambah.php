<?php 
include 'koneksi.php';
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
    <H2>MENAMBAHKAN DATA </H2>
    <form action="simpan.php" method="post">
        <table>
            <tr>
                <td>
                    <label id="nrp">NRP</label><br>
                    <input type="text" name="nrp"><br>
                </td>
            <tr>
                <td>
                    <label id="nama">Nama</label><br>
                    <input type="text" name="nama"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="fakultas">Fakultas</label><br>
                    <input type="text" name="fakultas"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="jurusan">Jurusan</label><br>
                    <input type="text" name="jurusan"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="ipk">IPK</label><br>
                    <input type="text" name="ipk"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="status">Status</label><br>
                    <input type="text" name="status"><br>
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