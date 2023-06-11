<?php
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM mahasiswa")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Source+Sans+Pro:ital,wght@1,200&display=swap" rel="stylesheet">
    <title> Menampilkan Data Mahasiswa Dari Database</title>    

</head>
<body>
    <h2 style="text-align:center">Menampilkan Data Mahasiswa Dari Database</h2>
    <a href="tambah.php" class="btn btn-secondary">Tambah Data</a>

    
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr style="text-align:center">
                <td>Nrp</td>
                <td>Nama</td>
                <td>Fakultas</td>
                <td>Jurusan</td>  
                <td>Ipk</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php while ($data = mysqli_fetch_assoc($query)) { ?>
            <tr>
                <td><?php echo $data["nrp"] ?></td>
                <td><?php echo $data["nama"] ?></td>
                <td><?php echo $data["fakultas"] ?></td>
                <td><?php echo $data["jurusan"] ?></td>
                <td><?php echo $data["ipk"] ?></td>
                <td><?php echo $data["status"] ?></td>
                <td>
                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-outline-secondary">Edit</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm" onclick="return confirm('hapus ?')">Hapus</a>
                </td>
            </tr>
    <?php } ?>

</body>
</html>