<?php
echo "Sekarang....<br>";
echo "Hari : ",date(l),"<br>";
echo "Tanggal : ",date('d F Y'),"<br>";
echo "Jam : ",date('h:i:s A');
echo "<hr>";
$hari=30;
$bulan=2;
$tahun=2005;
$validasi=checkdate($bulan,$hari,$tahun);
echo "Tanggal yang dipilih : $hari - $bulan - $tahun <br>";
echo "Penulisan tanggal - <b><U>";
if ($validasi)
{
 echo "benar";
} else
{
 echo "salah";
}
echo "</b></u><br>";
echo "Silahkan dibetulkan kembali";
?>