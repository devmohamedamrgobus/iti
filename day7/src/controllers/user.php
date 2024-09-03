<?php

namespace Iti\Mvc\controllers;

use Iti\Db\db;

class user{
    public function index(){

        $db = new db('localhost','root','','iti');
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