<?php

namespace liw\app;

class App
{
    public function hello()
    {
        echo 'Hello app';
    }

    //\+7\(\d{3}\)\s\d{3}-\d{2}-\d{2}
    //\d{4}(\s|-)\d{4}
    //\+?\d{1,2}\(\d{3}\)\s?\d{3}-\d{2}-\d{2}
    //\d{2}\.\d{2}\.\d{4}
    //https://regex101.com/
    public function regexp($data)
    {
        $regexp = "/\+?\d{1,2}\(\d{3}\)\s\d{3}-\d{2}-\d{2}/";
        $result = null;
        preg_match_all($regexp,$data,$result);
        foreach ($result[0] as $item){
            echo $item, "<br>";
        }

        $regexp = '/\s\s+/';
        echo  preg_replace($regexp,' ',$data);



    }

}