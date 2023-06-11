<?php
class laptop
{
    private $prosesor = "core i7";
    public function get_prosesor()
    {
        return $this -> prosesor;
    }
}

$laptop_budi = new laptop();
echo $laptop_budi -> get_prosesor();
?>