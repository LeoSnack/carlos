<?php

$host = 'localhost'; // адрес сервера 
$database = 'carlos'; // имя базы данных
$user = 'root'; // имя пользователя
$password = ''; // пароль

$link = mysqli_connect($host, $user, $password, $database) 
    or die("Ошибка " . mysqli_error($link));

$link->set_charset("utf8mb4");  
mysqli_query($link,"SET CHARACTER SET UTF8");