<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/db.php';
$name = $_POST['name']; //получение данных
$pdo->query("INSERT INTO categories (name) VALUES ('$name')"); //INSERT INTO-вставить в ''
header("Location: /categories/"); //переадресация-редирект