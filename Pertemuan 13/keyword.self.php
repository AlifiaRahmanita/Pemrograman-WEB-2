<?php
class laptop
{
    const os = "Microsoft windows";
    private $prosesor = "core i7";
    public function get_os()
    {
        return self::os;
    }
}
echo laptop::os;
echo "<br/>";
$laptop_budi = new laptop();
echo $laptop_budi -> get_os();
?>