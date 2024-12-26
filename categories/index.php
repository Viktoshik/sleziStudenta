<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php'; //подключение к бд require-ключевое слово для подключения файлов, $_SERVER-глобальная переменная, DOCUMENT_ROOT-значение, которое возвращает полный путь до корневой папки проекта
$categories = $pdo->query("SELECT * FROM categories")->fetchAll(PDO::FETCH_ASSOC); //в переменную categories пишем запрос, где переменная pdo обращается к query-метод, выполняющий запрос, в скобочках сам запрос, SELECT-выбрать, *-всё, FROM-из (указываем откуда). Обращаемся к fetchAll-преобразует в нормальные данные(обязателен, иначе вывод не будет работать)
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
<a href="/categories/create.php">Добавить</a>
<table>
    <tr>
        <td>id</td>
        <td>name</td>
    </tr>

    <?php foreach ($categories as $category): ?>
        <tr>
            <td><?= $category["id"] ?></td>
            <td><?= $category["name"] ?></td>
            <td><a href="/categories/edit.php?id=<?=$category['id']?>">Изменить</a></td>
            <td><a href="/categories/actions/delete.php?id=<?=$category['id']?>">Удалить</a></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
