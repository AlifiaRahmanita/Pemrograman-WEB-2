<?php
$nilai = 0;
echo $nilai. "<br>";
if ($nilai > 100) {
    echo "Nilai terlalu besar";
} elseif ($nilai >= 85) {
    echo "A";
} elseif ($nilai >= 80) {
    echo "A-";
} elseif ($nilai >= 75) {
    echo "B+";
} elseif ($nilai >= 70) {
    echo "B";
} elseif ($nilai >= 65) {
    echo "B-";
} elseif ($nilai >= 60) {
    echo "C+";
} elseif ($nilai >= 55) {
    echo "C";
} elseif ($nilai >= 50) {
    echo "C-";
} elseif ($nilai >= 40) {
    echo "D";
} elseif ($nilai >= 0) {
    echo "E";
} elseif ($nilai <= 0) {
    echo "nilai terlalu kecil";
}    
?>