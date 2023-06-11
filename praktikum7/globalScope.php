<?php
    $angka = 1;
        function nilai(){
        global $angka;
     $angka = 2;
}

nilai();
echo $angka;
?>