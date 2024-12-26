<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'].'/db.php';
$id = $_GET['id']; //получение данных
$pdo->query("DELETE FROM `categories` WHERE id=$id");
header("Location: /categories/"); //переадресация-редирект