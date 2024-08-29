<?php

// oop


// class
// interface
// abstract class
// trait
// access modifires [ public , protected , private  ]
// magic methods
// this , self
// namespace
// autoload
// inhiretance
// override , overloading






// category












//class arrayo{
//    public $length;
//
//    public function add()
//    {
//
//    }
//}
//
//
//
//$x = new arrayo();
//$x->length



















//$calc2 = new calc();
//$calc2->x = 40;
//$calc2->y = 50;
//$calc2->sum();



//class a {
//    function amethod()
//    {
//        echo 'a method';
//    }
//}
//class c {
//    function cmethod()
//    {
//        echo 'c method';
//    }
//}
//
//class b extends a
//{
//    public function bmethod()
//    {
//        echo 'b method';
//    }
//}
//
//$b = new b;
//$b->bmethod();














//class humman{
//    public function eat()
//    {
//        echo 'eat';
//    }
//}
//
//
//
//class cat extends humman {
//
//}
//
//class user extends humman
//{
//
//}















// access modifires








//class a {
//    private $x = 10;
//
//    public function getnumber ()
//    {
//        echo $this->x;
//    }
//}
//
////$a = new a;
////$a->x;
//
//class b extends a{
//    public function bmethod()
//    {
//        echo $this->x;
//    }
//}
////
////
//$b = new b;
//echo $b->bmethod();
//





//



//class calc{
//    public $x;
//
//    public $y;
//
//    public $res;
//    public function sum()
//    {
//
//        $this->res =  $this->x+$this->y;
//        return $this;
//    }
//
//    public function sub()
//    {
//        $this->res =  $this->x-$this->y;
//        return $this;
//    }
//
//
//    public function mult()
//    {
//        $this->res =  $this->x*$this->y;
//        return $this;
//    }
//
//
//    public function div()
//    {
//        $this->res =  $this->x/$this->y;
//        return $this;
//    }
//
//    public function print()
//    {
//        echo $this->res;
//    }
//}
//
//
//
//
//$calc = new calc;
//$calc->x = 10;
//$calc->y = 50;
//$calc->sum()->print();










// insert
//$db = new db;
//$db->table('category')->insert([])->excute();
// update
//$db->table('user')->update([])->where()->excute();
// select
//$db->table('user')->select()->get();




class db{
    /**
     * @var false|mysqli
     */
    private $connection;
    /**
     * @var
     */
    private $table;
    /**
     * @var
     */
    private $sql;

    public function __construct($server,$user,$password,$database)
    {
        $this->connection = mysqli_connect($server,$user,$password,$database);
    }

    /**
     * @param string $table
     * @return object|$this
     */
    public function table(string $table):object
    {
        $this->table = $table;
        return $this;
    }

    /**
     * @param array $data
     * @return object|$this
     */
    public function insert(array $data):object
    {
        $columns = '';
        $values = '';
        foreach ($data as $key => $value){
            $columns .= "`$key`,";
            $values .= "'$value',";
        }
        $columns = rtrim($columns,',');
        $values = rtrim($values,',');
        $this->sql = "INSERT INTO `$this->table` ($columns) values ($values)";
        return $this;
    }

    /**
     * @param array $data
     * @return object|$this
     */
    public function update(array $data):object
    {
        $row = '';
        foreach ($data as $key => $value){
            $row .= "`$key` = '$value',";
        }
        $row = rtrim($row,',');
        $this->sql = "UPDATE `$this->table` SET $row";
        return $this;
    }

    /**
     * @return int
     */
    public function excute():int
    {
        mysqli_query($this->connection,$this->sql);
        return mysqli_affected_rows($this->connection);
    }

    /**
     * @param string $columns
     * @return object|$this
     */
    public function select(string $columns = "*"):object
    {
        $this->sql = "SELECT $columns FROM $this->table ";
        return  $this;
    }

    /**
     * @return array
     */
    public function all():array
    {
        $query = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }

    /**
     * @return array
     */
    public function first():array
    {
        $query = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($query);
    }

    /**
     * @param string $column
     * @param string $opreator
     * @param string $value
     * @return object|$this
     */
    public function where(string $column,string $opreator,string $value):object
    {
        $this->sql .= "WHERE `$column` $opreator  '$value'";
        return $this;
    }

    /**
     * @param string $column
     * @param string $opreator
     * @param string $value
     * @return object|$this
     */
    public function andWhere(string $column,string $opreator,string $value):object
    {
        $this->sql .= " AND `$column` $opreator  '$value'";
        return $this;
    }

    /**
     * @param string $column
     * @param string $opreator
     * @param string $value
     * @return object|$this
     */
    public function orWhere(string $column,string $opreator,string $value):object
    {
        $this->sql .= " OR `$column` $opreator '$value'";
        return $this;
    }

    /**
     * @return $this
     */
    public function delete()
    {
        $this->sql = "DELETE FROM `$this->table` ";
        return $this;
    }
}


$db = new db('localhost','root','','iti');
$row = $db->table('category')
    ->update(['name'=>'iti'])
    ->where('id','=',7)
    ->excute();

echo '<pre>';
print_r($row);





