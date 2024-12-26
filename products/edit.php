<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$categories = $pdo->query("SELECT * FROM `categories`")->fetchAll();
$product = $pdo->query("SELECT * FROM `products` WHERE id = $id")->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="/products/">Назад</a>
<form action="/products/actions/update.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <label for="">Название</label>
    <input type="text" name="name" value="<?= $product['name'] ?>">
    <label for="">Категории</label>
    <select name="category_id">
        <?php foreach ($categories as $category): ?>
            <option value="<?= $category["id"] ?>" <?= $product['category_id'] == $category['id'] ? 'selected' : '' ?>><?= $category["name"] ?></option>
        <?php endforeach; ?>
    </select>
    <label for="">Цена</label>
    <input type="number" name="price" value="<?= $product['price'] ?>">
    <label for="">Популярный</label>
    <input type="checkbox" name="is_popular" <?= $product['is_popular'] ? 'checked' : '' ?>>
    <label for="">slug</label>
    <input type="text" name="slug" value="<?= $product['slug'] ?>">
    <input type="submit">
</form>
</body>
</html>