<?php
interface kendaraanInterface{
    public function get_bahan_bakar();
}

interface jalurInterface{
    public function get_jalur();
}

abstract class kendaraan 
{
    private $jenis;

    public function set_bahan_bakar($jenis){
        $this->jenis = $jenis;
    }

    public function get_bahan_bakar()
    {
        return $this->jenis;
    }
}

class bus extends kendaraan implements kendaranInterface,jalurInterface{
    public function get_jalur()
    {
        return 'jalurnya adlah jalan raya';
    }
}


class pesawat extends kendaraan implements kendaranInterface,jalurInterface{
    public function get_jalur()
    {
        return 'berjalan di langit';
    }
}


class kapal extends kendaraan implements kendaranInterface,jalurInterface{
    public function get_jalur()
    {
        return 'berjalan di laut';
    }
}

$bus = new bus();
$bus->$set_bahan_bakar('solar');

$pesawat = new pesawat();
$pesawat->$set_bahan_bakar('avtur');

$kapal = new kapal();
$kapal->$set_bahan_bakar('solar');

echo $bus->get_bahan_bakar();
echo "<br/>";
echo $bus->get_jalur();
echo "<br/>;
echo $pesawat->get_bahan_bakar();
echo "<br/>";
echo $pesawat->get_jalur();
echo "<br/>;
echo $kapal->get_bahan_bakar();
echo "<br/>";
echo $kapal->get_jalur();
?>