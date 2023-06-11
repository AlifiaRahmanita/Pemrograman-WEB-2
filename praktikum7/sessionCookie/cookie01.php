<?php
    $value = "A-Zoel";
    $value2 = "Zulqarnaen NS";
    setcookie("usename", $value);
    setcookie("NamaLengkap", $value2, time()+3600); //expire in 1 hourse
    echo "<h1> ini halaman pengesetan cookie</h1>";
    echo "<h2><a href='cookie02.php'>klik disini untuk pemeriksaan cookie</a>";
?>