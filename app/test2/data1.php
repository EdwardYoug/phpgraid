<?php

namespace liw2\test\test2;

class data1
{
    public function test2()
    {
        $data = [
            '1'=>'1',
            '2'=>'2',
            '3'=>'vnezapno'
        ];

        $c = false;
        echo 'isset ', isset($c)?'Существует':'Пусто', '<br>';
        echo 'empty ', empty($c)?'Пусто':'Существует', '<br>';


      //  echo http_build_query($data);
    }
}