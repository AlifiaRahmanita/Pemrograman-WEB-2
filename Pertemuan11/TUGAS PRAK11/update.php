<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
if(isset($_POST['input'])) {
    $id = $_POST ['id'];
	$nrp = $_POST ['nrp'];
	$nama = $_POST ['nama'];
	$fakultas = $_POST ['fakultas'];
	$jurusan = $_POST ['jurusan'];
	$ipk = $_POST ['ipk'];
	$status = $_POST ['status'];


// query SQL untuk insert data
$query="UPDATE mahasiswa SET nrp='$nrp',nama='$nama',fakultas='$fakultas', jurusan='$jurusan',ipk='$ipk',status='$status' where id='$id'";
mysqli_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:tampil.php");

}

?>