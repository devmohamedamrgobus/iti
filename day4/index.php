<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $students =  explode(",",$_POST['students']);
    foreach ($students as $student){
        $content =  file_get_contents('cer.html');

        $newcontent =  str_replace('{name}',$student,$content);

        fopen("$student.html",'w');

        file_put_contents("$student.html",$newcontent);
    }
}

