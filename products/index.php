<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php'; //подключение к бд require-ключевое слово для подключения файлов, $_SERVER-глобальная переменная, DOCUMENT_ROOT-значение, которое возвращает полный путь до корневой папки проекта
$products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC); //в переменную products пишем запрос, где переменная pdo обращается к query-метод, выполняющий запрос, в скобочках сам запрос, SELECT-выбрать, *-всё, FROM-из (указываем откуда). Обращаемся к fetchAll-преобразует в нормальные данные(обязателен, иначе вывод не будет работать)
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
<a href="/index.php">Назад</a>
<a href="/products/create.php">Добавить</a>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
        <td>category_id</td>
        <td>price</td>
        <td>is_popular</td>
        <td>slug</td>
    </tr>

    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product["id"] ?></td>
            <td><?= $product["name"] ?></td>
            <td><?= $product["category_id"] ?></td>
            <td><?= $product["price"] ?></td>
            <td><?= $product["is_popular"] ?></td>
            <td><?= $product["slug"] ?></td>
            <td><a href="/products/edit.php?id=<?=$product['id']?>">Изменить</a></td>
            <td><a href="/products/actions/delete.php?id=<?=$product['id']?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
