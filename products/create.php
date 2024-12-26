<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$categories = $pdo->query("SELECT * FROM `categories`")->fetchAll();
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
<form action="/products/actions/store.php" method="post">
    <label for="">Название</label>
    <input type="text" name="name">
    <label for="">Категории</label>
    <select name="category_id">
        <?php foreach ($categories as $category):  ?>
            <option value="<?= $category["id"] ?>"><?= $category["name"] ?></option>
        <?php endforeach;?>
    </select>
    <label for="">Цена</label>
    <input type="number" name="price">
    <label for="">Популярный</label>
    <input type="checkbox" name="is_popular">
    <label for="">slug</label>
    <input type="text" name="slug">
    <input type="submit">
</form>
</body>
</html>