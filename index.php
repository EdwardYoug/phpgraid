<?php

$text = '123
321
12.10.2021
dfssdfsdfds
4444 8888 3321 5554
4444-8888-3321-5554
+38 (050) 547 888
Задача организации,     в особенности же курс на социально-ориентированный национальный проект напрямую зависит от направлений прогрессивного развития.
Разнообразный   и богатый опыт   сложившаяся структура организации требует от нас системного анализа всесторонне сбалансированных нововведений.
Разнообразный и богатый опыт                 социально-экономическое развитие играет важную роль в формировании модели развития!
Задача организации,+7(918) 295-47-87 в     особенности же ';

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

$dataBase = new \liw2\test\test2\DataBase();
$result = $dataBase->select('SELECT IS_FREE_LOCK({?}) AS is_lock', array('test_lock'));

if (current($result)['is_lock']) {
    $get_lock = $dataBase->select('SELECT GET_LOCK({?},{?}) AS is_lock',array('test_lock',0));
    if (current($get_lock)['is_lock']){
       $select = $dataBase->select('SELECT * FROM excursion',array());
       $release_lock = $dataBase->select('SELECT RELEASE_LOCK({?}) AS is_lock',array('test_lock'));
       var_dump('Результат: ',$select);
    } else {
        echo 'GET_LOCK вернул 0';
    }
} else {
   echo 'IS_FREE_LOCK вернул 0';
}

//var_dump($dataBase);
//die();
//
//$app = new \liw\app\App();
//
//$app2 = new \liw2\test\test2\data1();
//
//$app2->test2();
//
//$log = new \liw3\log\data2();
//
//$logData = [
//        'строка1'=>'ldfkgfdlgfd',
//        'Строка2'=>'d222222222'
//];
//
//$log->addLog($logData);
//
//$app->regexp($text);
//
//$app->date();
//
//use DebugBar\StandardDebugBar;
//
//$debugbar = new StandardDebugBar();
//$debugbarRenderer = $debugbar->getJavascriptRenderer();
//
//$debugbar["messages"]->addMessage("hello world!");

?>
<!--<html>-->
<!--    <head>-->
<!--        --><?php //echo $debugbarRenderer->renderHead() ?>
<!--    </head>-->
<!--    <body>-->
<!---->
<!--      --><?php //echo $debugbarRenderer->render() ?>
<!--    </body>-->
<!--</html>-->