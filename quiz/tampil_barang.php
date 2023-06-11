<?php
include 'koneksi_barang.php';
$query = mysqli_query($conn, "SELECT * FROM barang1")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Source+Sans+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <title> Menampilkan Data Barang</title>    

</head>
<body>
    <h2 style="text-align:center">Menampilkan Data Barang</h2>
    <a href="tambah.php" class="btn btn-secondary">Tambah Data</a>

    
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr style="text-align:center">
                <td>id_barang</td>
                <td>Nama Barang</td>
                <td>Keterangan</td>
            </tr>
        </thead>
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $data["id_barang"] ?></td>
                <td><?php echo $data["nama_barang"] ?></td>
                <td><?php echo $data["keterangan"] ?></td>
            </tr>
    <?php } ?>

</body>
</html>