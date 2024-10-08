<?php
require 'lib/db.php';

$row =  singleProduct($_GET['id']);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
<form action="update.php" method="post" enctype="multipart/form-data">
    <input type="text" value="<?= $row['name'] ?>" name="name">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <textarea id="editor" name="description"><?= $row['description'] ?></textarea>
    <img src="img/<?= $row['img'] ?>">
    <input type="file" name="img">
    <input type="submit" value="update">
</form>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor' );
</script>
</body>
</html>

