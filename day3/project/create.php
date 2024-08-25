<?php
require 'lib/db.php';
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $description = $_POST['description'];
    $imgname = $_FILES['img']['name'];
    $imggtmp = $_FILES['img']['tmp_name'];
    move_uploaded_file($imggtmp,"img/$imgname");

    $res = createProduct([
        'name'=>$name,
        'description'=>$description,
        'img'=>$imgname
    ]);

    if($res){
        header('location: index.php');
    }
}

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
    <form action="create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name">
        <textarea id="editor" name="description"></textarea>
        <input type="file" name="img">
        <input type="submit" value="save">
    </form>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
</body>
</html>
