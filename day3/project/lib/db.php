<?php

function  connection()
{
    return mysqli_connect('localhost','root','','iti');
}
function createProduct(array $data)
{
    $connect =  connection();
    $columns = '';
    $values = '';
    foreach ($data as $key => $value){
        $columns .= "`$key`,";
        $values .= " '$value',";
    }
    $columns = rtrim($columns,',');
    $values = rtrim($values,',');

    $sql = "INSERT INTO `product` ($columns) VALUES ($values)";

    mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
}


function getProduct()
{
    $connect =  connection();
    $sql = "SELECT * FROM `product`";

    $query = mysqli_query($connect,$sql);
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
}



function deleteProduct(int $id)
{
    $connect =  connection();

    $sql = "DELETE FROM `product` where `id` = $id";

    mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
}


function updateProduct(array $data,int $id)
{
    $connect =  connection();
    $row = '';
    foreach ($data as $key => $value){
        $row .= "`$key` = '$value',";
    }
    $row = rtrim($row,',');

    $sql = "UPDATE `product` SET $row where `id` = $id";

    mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
}