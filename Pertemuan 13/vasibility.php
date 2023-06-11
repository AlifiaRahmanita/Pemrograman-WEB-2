<?php
class komputer
{
    public $prosesor = "Core i7";
    public $memori = "4GB";
    public function memutar_video()
    {
        return "komputer memutar video";
    }
}

$komputer_budi = new komputer();
echo $komputer_budi -> prosesor;
echo "<br/>";
echo $komputer_budi -> memori;
echo "<br/>";
echo $komputer_budi -> memutar_video();
?>