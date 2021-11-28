<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

require __DIR__.'/vendor/autoload.php';

$app = new \liw\app\App();

//$app->hello();

$app2 = new \liw2\test\test2\data1();

$app2->test2();