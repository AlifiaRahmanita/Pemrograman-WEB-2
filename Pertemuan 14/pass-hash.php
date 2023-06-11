<?php
$options = [
    'cost' => 10,
];
$passwordku = "123456789";
$password_hash = password_hash($passwordku,
    PASSWORD_DEFAULT,$options);
echo $password_hash;
?>