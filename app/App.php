<?php

namespace liw\app;

use DateTime;

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
        preg_match_all($regexp, $data, $result);
        foreach ($result[0] as $item) {
            echo $item, "<br><br>";
        }

        $regexp = '/\s\s+/';
        echo preg_replace($regexp, ' ', $data) . '<br><br>';

        $regexp = '/\d{2}\.\d{2}\.\d{4}/';

        echo preg_replace_callback($regexp, function ($item) {
            $date = DateTime::createFromFormat('d.m.Y', $item[0]);
            return $date->format('F j, Y');
        }, $data). '<br><br>';

    }

    public function date()
    {
        $date1 = DateTime::createFromFormat('Y.m.d','2021.10.10');
        $date2 = DateTime::createFromFormat('Y.m.d','2022.20.20');
        $today = DateTime::createFromFormat('Y.m.d H:i:s', date('Y.m.d H:i:s'));

        $interval = $date1->diff($date2);

        echo 'today:  '. $today->format('d.m.Y').'<br><br>';

        $beginDay = $today->format('Y.m.d 00:00:00');
        $endday = $today->format('Y.m.d 23:59:59');
      //  $addday = $today->add(new \DateInterval('P1D'));
        $addWeek = $today->add(new \DateInterval('P7D'));
       // $addMonth = $today->add(new \DateInterval('P1M'));

        echo $interval->days,'<br><br>';
        echo $interval->m,'<br><br>';
        echo $interval->y,'<br><br>';
        echo $beginDay,'<br><br>';
        echo $endday,'<br><br>';
       // echo $addday->format('Y.m.d'),'<br><br>';
        echo $addWeek->format('Y.m.d'),'<br><br>';
      //  echo $addMonth->format('Y.m.d'),'<br><br>';
    }

}