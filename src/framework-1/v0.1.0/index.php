<?php

header('Content-Type: text/html; charset=utf-8');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));


require 'library' . DS . 'STCDS' . DS . 'core' . DS . 'AutoLoad.php';

$autoLoad = new AutoLoad();

spl_autoload_register(array($AutoLoad, 'core'));


use STCDS\Core\Controller as Controller;

$controller = new Controller();
