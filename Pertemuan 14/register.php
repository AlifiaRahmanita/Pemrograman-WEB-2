<?php
include_once('koneksi2.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    if($database->register($username,$password,$nama))
    {
        header('location:login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,
    shrink-to-fit=no">
    <meta namae="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Jeky11 v3.8.5>

    <title>Register Form</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-gg0yR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sticky-footer/">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select:none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px){
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link href="stickky-footer.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
    <main role="main" class="flex-shink-0">
        <div class="container">
            <h1 class="mt-5> Register Form </h1>
            <p class="lead"> Silahkan DAftarkan Identitas Anda </p>
            <hr/>
            <form method="post" action="">
            <div class="form-group row">
                <lable for="username" class="col-sm-2 c0l-form-lable"> username </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="username">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div>    
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a href="login.php" class="bbtn btn-success">Login</a>
                        <button type="submit" class="btn btn-primary" name="register">Register</button>
                    </div>
                </div>
             </form>
         </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">Pemrograman Web Dinamis</span>
        </div>  
    </footer>            
</body>
</html>