<?php

use Jenssegers\Blade\Blade;

function dd($array){
    echo '<pre>';
    print_r($array);
    die;
}


function view($view,$data = []){
    $blade = new Blade('../src/views', '../src/cache');
    echo  $blade->render($view, $data);
}