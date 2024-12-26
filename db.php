<?php
//подключаемся к бд
$bd = 'sleziStudenta'; //название базы
$server = 'MySQL-8.2'; //сервер
$user = 'root'; //логин
$pass = ''; //пароль

return new PDO("mysql:host=$server;dbname=$bd", $user, $pass); //возвращаем объект пдо