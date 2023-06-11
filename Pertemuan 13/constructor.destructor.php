<?php
class komputer
{
    public $prosesor;
    public $memory;
    
    public function __construct($prosesor,$memory = "4 GB")
    {
        $this->prosesor = $prosesor;
        $this->memory = $memory;
    }
}

$komputer_budi = new komputer("core i7","2 GB");
echo $komputer_budi->prosesor;
echo" | ";
echo $komputer_budi->memory;
?>