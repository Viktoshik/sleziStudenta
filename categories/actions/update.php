<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/db.php';
$id = $_POST['id'];
$name = $_POST['name']; //получение данных
$pdo->query("UPDATE `categories` SET `name`='$name' WHERE id=$id"); //INSERT INTO-вставить в ''
header("Location: /categories/"); //переадресация-редирект