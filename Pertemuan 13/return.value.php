<?php
class laptop
{
    private $prosesor;
    public function get_prosesor()
    {
        return $this->prosesor;
    }
    public function set_prosesor($prosesor)
    {
        $this->prosesor = $prosesor;
    }
}
$laptop_budi = new laptop();
$laptop_budi->set_prosesor("core i5");
echo $laptop_budi->get_prosesor();
?>