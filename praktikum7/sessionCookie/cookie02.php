<?php
    if(isset($_COOKIE['username']))
    {
        echo "<h1> cookie yang bernama username ada isinya " .
$_COOKIE['username'] . "</h1>";
    }
    else
    {
        echo "<h1> cookie yang bernama username TIDAK ADA </h1>";
    }
    if(isset($_COOKIE['NamaLengkap']))
    {
        echo "<h1> cookie yang bernama NamaLengkap ada. isinya " .
$_COOKIE['NamaLengkap'] . "<h1>";  
    }  
    else
    {
        echo "<h1> cookie yang bernama NamaLengkap TIDAK ADA</h1>";
     }
    echo "<h2> klik <a href='cookie01.php'> disini </a> untuk menciptakan cookies</h2>";
    echo "<h2> klik <a href='cookie03.php'> disini </a> untuk penghapusan cookies</h2>";
    ?>