<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
require $_SERVER['DOCUMENT_ROOT'] . '/slug.php';
$id = $_POST['id'];
$name = $_POST['name']; //получение данных
$category_id = $_POST['category_id'];
$price = $_POST['price'];
$is_popular = isset($_POST['is_popular']) ? 1 : 0;
$slug = empty($_POST['slug']) ? createSlug($name) : $_POST['slug'] ;
$pdo->query("UPDATE `products` SET `name`='$name',`category_id`='$category_id',`price`='$price',`is_popular`='$is_popular',`slug`='$slug' WHERE id = $id"); //INSERT INTO-вставить в ''
header("Location: /products/"); //переадресация-редирект