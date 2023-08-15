<?php

use MVC\core\app;

define("DS", DIRECTORY_SEPARATOR);
define("ROOT", dirname(__DIR__));
define("APP", ROOT.DS."app");
define("CONFIG", APP.DS."config");
define("CONTROLLERS", APP.DS."controllers");
define("MODELS", APP.DS."models");
define("VIEW", APP.DS."views");
define("CORE", APP.DS."core");


require_once("../vendor/autoload.php");


$app = new app();








?>