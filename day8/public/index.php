<?php

require_once '../vendor/autoload.php';

use Iti\Db\db;
use Iti\Mvc\core\Bootstrap;
use Iti\Mvc\core\Load;

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();



Load::set('db',new db);




(new Bootstrap);





