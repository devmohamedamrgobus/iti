<?php

namespace Iti\Mvc\controllers;

use Iti\Mvc\core\Load;

class user extends controller{

    public function index(){

        $db = Load::get('db');
        $result =  $db->table('category')->select()->all();
        return view('index',['result'=>$result]);
    }

    public function edit(){
        echo 'edit user';
    }

    public function delete($id){
        echo 'delete '.$id;
        $numbers = [1,2,3,4];

       dd($numbers);
    }
}