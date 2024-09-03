<?php


// require 'db.php';

// $db = Registry::get('db');
// $result =  $db->table('category')->select()->all();


// echo '<pre>';
// print_r($result);


// echo '<pre>';

// print_r(Registry::$object);


 // namespace 
 // autoload




// class db{
//     public function __call($name, $arguments)
//     {
//         if($name == 'insert'){
//             if(count($arguments) == 0){
//                 echo 'insert';
//             }else {
//                 echo 'insert '.$arguments[0];
//             }
//         }   
//     }
//     // public function insert(){
//     //     echo 'inserrt';
//     // }

//     // public function insert($name){
//     //     echo 'inserrt';
//     // }
// } 


// class mysqldb extends db{
//     public function insert(){
//         echo 'mysql insert';
//     }
// }

// $m = new db();
// $m->insert(10);
// $m->insert();



// class a {
//     final public function amethod(){
//         echo 'a method';
//     }
// }


// class b  extends a {
//     // public function amethod(){
//     //     echo 'method static';
//     // }
// }



// $b = new b;
// $b->amethod();





namespace www;


class database {
    public function insert(){
        echo 'insert';
    }
}



