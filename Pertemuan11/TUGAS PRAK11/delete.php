<?php
include 'koneksi.php';
$id   = $_GET["id"];
$query="DELETE FROM mahasiswa WHERE id = $id" or die (mysqli_error($conn));
mysqli_query($conn, $query); 
header("location:tampil.php");
?>