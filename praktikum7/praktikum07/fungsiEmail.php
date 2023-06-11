<?php
$pengirim = "From: saya@email.com";
$tujuan = "anonkuncoro@yahoo.com";
$subject = "Pemberitahuan";
$isi = "Ini adalah percobaan pengiriman e-mail dengan menggunakan PHP";
mail($to,$subject,$isi,$pengirim);
?>