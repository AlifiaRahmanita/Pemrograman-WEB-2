<?php
$password_hash = '$2y$10$dWUxN5utcvgvO3Z5zUbKuOpHrIAYn0lnN5h/0jOTIzb2mcbij4yde';
$password = "123456789";
if(password_verify($password,$password_hash))
{
    echo "password valid";
}
else
{
    echo "password tidak valid";
}
?>