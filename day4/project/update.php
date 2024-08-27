<?php
require 'lib/db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$imgname = $_FILES['img']['name'];
$imgtmp  = $_FILES['img']['tmp_name'];

move_uploaded_file($imgtmp,"img/$imgname");


updateProduct([
    'name'=>$name,
    'description'=>$description,
    'img'=>$imgname
],$id);


header('location: index.php');