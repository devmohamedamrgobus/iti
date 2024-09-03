<?php

require_once '../vendor/autoload.php';

use Iti\Mvc\core\Bootstrap;


$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();








(new Bootstrap);





