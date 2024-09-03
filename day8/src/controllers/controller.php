<?php

namespace Iti\Mvc\controllers;
use Exception;


class controller {
    public function __call($name, $arguments)
    {
        throw new Exception("$name not found");
    }
}