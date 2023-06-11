<?php
    function kalimat($str, $align="left"){
        return '<p align="'.$align.'">'.$str.'</p>';
    }

$pribahasa = "Rajin Pangkal Pandai";
echo kalimat($pribahasa);
echo kalimat($pribahasa, "right");
?>