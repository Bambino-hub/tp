<?php

use App\core\Application;

define("VIEW_ROOT", dirname(__DIR__) . "/views/");

require_once(dirname(__DIR__) . "/vendor/autoload.php");

$app = new Application();
$app->router->get("home", function () {
    echo "I'am the home page";
});
$app->run();
