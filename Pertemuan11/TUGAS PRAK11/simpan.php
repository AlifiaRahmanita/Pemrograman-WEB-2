<?php
//koneksi ke database
	include 'koneksi.php';
//menangkap data yang dikirim dari form
if(isset($_POST['input'])) {
	$nrp = $_POST ['nrp'];
	$nama = $_POST ['nama'];
	$fakultas = $_POST ['fakultas'];
	$jurusan = $_POST ['jurusan'];
	$ipk = $_POST ['ipk'];
	$status = $_POST ['status'];
	
	//input data  ke database
	$sql="INSERT INTO mahasiswa VALUES('','$nrp','$nama','$fakultas','$jurusan','$ipk','$status')" or die (mysqli_error($conn));
	$hasil=mysqli_query($conn,$sql);
	if($hasil) {
		header("location:tampil.php");
	} else {
		echo "gagal";
		echo mysqli_error($conn);
	}

}

	 ?>