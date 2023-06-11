<?php
    function tukar(&$bil_1, &$bil_2){
        $temp = $bil_1;
        $bil_1 = $bil_2;
        $bil_2 = $temp;
    }
$a = 2;
$b = 7;

echo "<b>Mula-mula</b><br />";
echo "\$a : ".$a;
echo "<br />";
echo "\$b : ".$b;
tukar($a,$b);
echo "<br /><br /><b>Setelah Penukaran</b><br />";
echo "\$a : ".$a;
echo "<br />";
echo "\$b : ".$b;
?>