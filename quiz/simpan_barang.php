<?php
//koneksi ke database
	include 'koneksi_barang.php';
//menangkap data yang dikirim dari form
if(isset($_POST['input'])) {
	$id_barang = $_POST ['id_barang'];
	$nama_barang = $_POST ['nama_barang'];
	$keteranagn = $_POST ['keterangan'];
	
	//input data  ke database
	$sql="INSERT INTO barang1 VALUES('','$id_barang','$nama_barang','$keterangan')" or die (mysqli_error($conn));
	$hasil=mysqli_query($conn,$sql);
	if($hasil) {
		header("location:tampil_barang.php");
	} else {
		echo "gagal";
		echo mysqli_error($conn);
	}

}

	 ?>