<?php
require_once 'lib/db.php';

$products = getProduct();

?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>description</th>
            <th>img</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= substr($product['description'],0,19) . "..." ?></td>
            <td><img src="img/<?= $product['img'] ?>"></td>
            <td><a href="">update</a></td>
            <td><a href="">delete</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
