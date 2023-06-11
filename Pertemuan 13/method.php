<?php
class house {
    public $primaryColor ='black';
    public function changColor ($color) {
        $this -> primaryColor = $color;
    }
}

//creates an object from the class
$myHouse = new house();

#black (default value)
echo $myHouse -> primaryColor;

//change the color of the house
$myHouse -> changColor('white');

#white
echo $myHouse -> primaryColor;

?>