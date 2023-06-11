<?php 
include 'koneksi.php';
$id = $_GET['id'];
$hasil = mysqli_query ($conn,"SELECT * FROM mahasiswa WHERE id = $id")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>edit data</title>
</head>
<body>
    <h2>MENGUBAH DATA </h2>
    <form action="update.php" method="post">
        <?php while ($data=mysqli_fetch_assoc($hasil)) { ?>
        <table>
            <tr>
                <td>
                <input type="hidden" name="id" value="<?= $data['id']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="nrp">NRP</label><br>
                    <input type="text" name="nrp" value="<?= $data['nrp']; ?>"><br>
                </td>
            <tr>
                <td>
                    <label id="nama">Nama</label><br>
                    <input type="text" name="nama" value="<?= $data['nama']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="fakultas">Fakultas</label><br>
                    <input type="text" name="fakultas"value="<?= $data['fakultas']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="jurusan">Jurusan</label><br>
                    <input type="text" name="jurusan"value="<?= $data['jurusan']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="ipk">IPK</label><br>
                    <input type="text" name="ipk" value="<?= $data['ipk']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label id="status">Status</label><br>
                    <input type="text" name="status" value="<?= $data['status']; ?>"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="input" onclick="return confirm('simpan data?')" >Input</button>
                    <button type="reset" name="batal">batal</button>
                </td>
            </tr>
        </table>
        <?php } ?>
    </form>
</body>
</html>