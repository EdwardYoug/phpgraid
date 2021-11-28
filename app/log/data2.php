<?php

namespace liw3\log;

class data2
{
    public function addLog($data)
    {
        date_default_timezone_set( 'Europe/Moscow' );
        $log = [
            'time' => date("F j, Y, g:i a"),
            'data' => $data
        ];
        if (!file_put_contents('./log/log.txt',json_encode($log,JSON_UNESCAPED_UNICODE)."\n",FILE_APPEND)){
            throw new \Exception('Лог не записан',400);
        }
    }

}