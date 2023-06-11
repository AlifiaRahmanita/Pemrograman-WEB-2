<?php
        session_start();
        if(isset($_POST['Login']))
        {
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            if($user=='azoel' && $pass=='001')
            {
                $_SESSION['sesLogin']=$user;
                echo "<h1>Anda Berhasil Login</h1>";
                echo "<h2>Klik <a href='session02.php'> disini (session02.php)</a> untuk menuju halaman pemeriksaan session";
            }
            else{
                header("location: session02.php");
            }
        }
?>
<html>
    <head>
        <tittle>[ Login Disini ]</tittle>
    </head>

    <body>
        <form method="post" action="">
            <h2>[ Login Disini ]</h2>
            Username : <input type="text" name="user"><br>
            Password : <input type="password" name="pass"><br>
            <input type="submit" name="login" value="Log In">
        </form>
    </body>
    </html>
