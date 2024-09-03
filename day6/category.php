<?php

require 'db.php';


$db = Registry::get('db');
$result =  $db->table('category')->select()->all();


echo '<pre>';
print_r($result);

// print_r($result);