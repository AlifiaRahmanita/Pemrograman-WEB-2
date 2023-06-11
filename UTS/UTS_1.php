<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21753040-Alifia Rahmanita</title>
</head>
<body>
    <h2>FORM INPUTAN NILAI</h2>
<form methode="GET" action="UTS_1.php">
        <table border="0">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" /></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td>:</td>
                <td><input type="text" name="uts" /></td>
            </tr>
            <tr>
                <td>TUGAS</td>
                <td>:</td>
                <td><input type="text" name="tugas" /></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td>:</td>
                <td><input type="text" name="uas" /></td>
            </tr>
            <tr>
                <td colspan="2"&nbsp;</td>
                <td><input type="submit" name="submit" value="kirim"/>
                    <input type="submit" name="submit" value="batal"/>
            </tr>

        </table>
        </form>

    <?php
    echo "-------------------------------------------------------";
    echo "<br/>";
    echo "<br/>";
    if(isset($_GET["submit"])){
        $nim = $_GET['nim'];
        $uts = $_GET['uts'];
        $tugas = $_GET['tugas'];
        $uas = $_GET['uas'];

        $nilai = ($uts*0.35) + ($tugas*0.2) + ($uas*0.45);
        switch($nilai){
            case ($nilai >= 80):
                echo "<table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>$nim</td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td>$uts</td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td>:</td>
                    <td>$tugas</td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td>$uas</td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td>$nilai</td>
                </tr>
                <tr>
                    <td>Index</td>
                    <td>:</td>
                    <td>A</td>
                </tr>
                </table>";
            echo "<br/>";
            echo "NIM $nim mempunyai nilai akhir $nilai dan index : A";
            break;

            case ($nilai >= 65):
                echo "<table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>$nim</td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td>$uts</td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td>:</td>
                    <td>$tugas</td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td>$uas</td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td>$nilai</td>
                </tr>
                <tr>
                    <td>Index</td>
                    <td>:</td>
                    <td>A</td>
                </tr>
                </table>";
            echo "<br/>";
            echo "NIM $nim mempunyai nilai akhir $nilai dan index : B";
            break;
            
            case ($nilai >= 40):
                echo "<table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>$nim</td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td>$uts</td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td>:</td>
                    <td>$tugas</td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td>$uas</td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td>$nilai</td>
                </tr>
                <tr>
                    <td>Index</td>
                    <td>:</td>
                    <td>A</td>
                </tr>
                </table>";
            echo "<br/>";
            echo "NIM $nim mempunyai nilai akhir $nilai dan index : C";
            break;

            case ($nilai >= 25):
                echo "<table>
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>$nim</td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td>$uts</td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td>:</td>
                    <td>$tugas</td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td>$uas</td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td>$nilai</td>
                </tr>
                <tr>
                    <td>Index</td>
                    <td>:</td>
                    <td>A</td>
                </tr>
                </table>";
            echo "<br/>";
            echo "NIM $nim mempunyai nilai akhir $nilai dan index : D";
            break;

            default;
            echo "<table>
            <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>$nim</td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td>:</td>
                    <td>$uts</td>
                </tr>
                <tr>
                    <td>TUGAS</td>
                    <td>:</td>
                    <td>$tugas</td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td>:</td>
                    <td>$uas</td>
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td>:</td>
                    <td>$nilai</td>
                </tr>
                <tr>
                    <td>Index</td>
                    <td>:</td>
                    <td>A</td>
                </tr>
                </table>";
            echo "<br/>";
            echo "NIM $nim mempunyai nilai akhir $nilai dan index : D";
            break;
        }
    }

    ?>
</body>
</html>