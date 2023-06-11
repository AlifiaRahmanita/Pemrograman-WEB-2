<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Checkbox</title>
</head>
<body>
    <form action="latihan6.php" mathod="GET">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" required="required"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="P">Perempuan
                    <input type="radio" name="jk" value="L">Laki-laki
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" name="hobi[]" value="membaca">membaca
                    <input type="checkbox" name="hobi[]" value="berenang">berenang
                    <input type="checkbox" name="hobi[]" value="rebahan">rebahan
                    <input type="checkbox" name="hobi[]" value="hiling">hiling
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama">
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghuchu</option>
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td><input type="submit" name="Simpan" value="Simpan"></td>
                <td><input type="reset" name="reset" value="Cencel"></td>
            </tr>
        </table>  
    </form>
<?php
    if(isset($_GET['Simpan'])) {
        $nama=$_GET['nama'];
        $jk=$_GET['jk'];
        $hobi=$_GET['hobi'];
        $agama=$_GET['agama'];
        $alamat=$_GET['alamat'];
    
        echo"<h1>Identitas Diri</h1></br>";

        echo"Nama : $nama</br>";
        
        
        if($jk == 'P'){
            echo"jenis kelamin : Perempuan</br>";
        } else {
            echo"jenis kelamin : laki-laki</br>";
        }
        
        if(empty($_GET['hobi'])){
            echo "Hobi Belum Dipilih ....";
        } else {
            echo "Hobi : ";
            foreach ($_GET['hobi'] as $hobi) {
                echo $hobi . " <br>" ;
            }
        }
    

        if($agama == 'Islam'){
            echo"Agama : Islam</br>";
        } else if($agama == "Kristen"){
            echo"Agama : Kristen</br>";
        } else if($agama == "Katolik") {
            echo"Agama : Katolik</br>";
        } else if($agama == "Hindu"){
            echo"Agama : Hindu</br>";
        } else if($agama == "Budha"){
            echo"Agama : Budha</br>";
        } else {
            echo"Agama : $agama</br>";
        }
    }
        
?>

</body>
</html>