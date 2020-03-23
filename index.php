<?php

define('ROOT', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('VIEW',ROOT.'Views'.DIRECTORY_SEPARATOR);
define('CORE',ROOT.'Core'.DIRECTORY_SEPARATOR);
define('CONTROLLER',ROOT.'Controllers'.DIRECTORY_SEPARATOR);
$modules = [ROOT,VIEW,CONTROLLER];

require_once 'Routing.php';
new Router;
//$router = new Router();
//$router -> run();