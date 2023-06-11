<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Febriansyah Agung Tirta - Tugas 2</title>
</head>
<body>
    <br><h1>Perulangan Do...While</h1>
    <div class="card-body">
        <form action="V.php" method="POST">
            <div class="col-auto">
                <label for="radius" class="col-from-label">Masukan Bilangan : </label>
            </div>
            <div class="col-auto">
                <input type="text" class="from-control" name="bil" placeholder="Masukan Nilai Bilangan">
            </div>
            <div class="col-auto">
                <input type="submit" name="submit" value="Proses">
            </div>
        </form>
    </div>

    <?php
        if(isset($_POST['submit'])){
            $bil=$_POST['bil'];
            do{
                if($bil%2==0){
                    echo "<font color ='red'> $bil=bilangan genap"."<br>";
                    $bil--;
                } else {
                    echo "<font color = 'green'> $bil=bilangan ganjil"."<br>";
                    $bil--;
                }
            } while ($bil >= 1);
        }
    ?>
</body>
</html>