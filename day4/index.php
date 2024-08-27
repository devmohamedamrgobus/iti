<?php



$content =  file_get_contents('cer.html');

$newcontent =  str_replace('{name}','ahmed',$content);

fopen('ahmed.html','w');

file_put_contents('ahmed.html',$newcontent);