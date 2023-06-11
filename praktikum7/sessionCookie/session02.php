<?php
    session_start();
    if(isset($_SESSION['sesLogin']))
    {
        echo "<h1> Selamat Datang " . $_SESSION['sesLogin'] . "</h1>";
        echo "<h2> Halaman ini hanya bisa di akses jika anda sudah login </h2>";
        echo "<h2> klik <a href='session03.php'>disini (session03.php)</a> untuk logout</h2>";
    }
    else
    {
        echo "<h2> Anda belum login !!!, anda tidak berhak masuk ke halaman ini.</h2>";
        echo "<h2>Silahkan Login <a href='session01.php'>disini</a></h2>";
    }
?>