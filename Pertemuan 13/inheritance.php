<?php
class komputer
{
    var $prosesor;
    var $memori;
    function memutar_video()
    {
        return "komputer memutar video";
    }
    function memutar_musik()
    {
        return "komputer memutar musik";
    }
}

class laptop extends komputer
{
    var $tipis;
    function cas_battery ()
    {
        return "laptop cas battery";
    }
}

$komputer_budi = new komputer();
$laptop_budi = new laptop();

$laptop_budi -> prosesor = "core i7";
echo $laptop_budi -> prosesor;
echo "<br/>";
echo $laptop_budi -> memutar_musik();

echo "<hr/>";
$komputer_budi -> tipis = "2 cm";
echo $komputer_budi -> tipis;
echo "<br/>";
echo $komputer_budi -> cas_battery();

?>