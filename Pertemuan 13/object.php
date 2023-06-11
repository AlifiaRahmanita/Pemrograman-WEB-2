<?php

class house {
    

    public $primaryColor = 'black';
    public $secondaryColor = [
        'bathroom' => 'white',
        'bedroom' => 'light pink',
        'kitchen' => 'light blue'
    ];
    public $hasPoll = false;
    public $extra;

}

$myHouse = new house();
    echo $myHouse -> primaryColor;
$friendHouse = new house();
    echo $friendHouse -> primaryColor;
?>