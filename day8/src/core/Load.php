<?php
namespace Iti\Mvc\core;
class Load{
    static public $object = [];

    static public function set($key,$value){
        self::$object[$key] = $value;
    }

    static public function get($key){
        return self::$object[$key];
    }
}