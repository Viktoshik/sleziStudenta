<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
require $_SERVER['DOCUMENT_ROOT'] . '/slug.php';
$name = $_POST['name']; //получение данных
$category_id = $_POST['category_id'];
$price = $_POST['price'];
$is_popular = isset($_POST['is_popular']) ? 1 : 0;
$slug = empty($_POST['slug']) ? createSlug($name) : $_POST['slug'] ;
$pdo->query("INSERT INTO `products`(`name`, `category_id`, `price`, `is_popular`, `slug`) VALUES ('$name','$category_id','$price','$is_popular','$slug')"); //INSERT INTO-вставить в ''
header("Location: /products/"); //переадресация-редирект
