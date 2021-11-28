<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

require __DIR__.'/vendor/autoload.php';

$app = new \liw\app\App();

//$app->hello();

$app2 = new \liw2\test\test2\data1();

$app2->test2();

$log = new \liw3\log\data2();

$logData = [
        'строка1'=>'ldfkgfdlgfd',
        'Строка2'=>'d222222222'
];

$log->addLog($logData);

use DebugBar\StandardDebugBar;

$debugbar = new StandardDebugBar();
$debugbarRenderer = $debugbar->getJavascriptRenderer();

$debugbar["messages"]->addMessage("hello world!");
?>
<html>
    <head>
        <?php echo $debugbarRenderer->renderHead() ?>
    </head>
    <body>

      <?php echo $debugbarRenderer->render() ?>
    </body>
</html>