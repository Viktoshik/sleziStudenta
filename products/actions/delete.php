<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/db.php';
$id = $_GET['id']; //получение данных
$pdo->query("DELETE FROM `products` WHERE id=$id");
header("Location: /products/"); //переадресация-редирект
