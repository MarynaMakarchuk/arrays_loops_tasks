<?php
$arr = [
    'Понедельник',
    'Вторник',
    'Среда',
    'Четверг',
    'Пятниця',
    'Cуббота',
    'Воскресенье'
];
$saturday = 5;
$sunday = 6;
foreach ($arr as $key => $days){
    if($key == $saturday or $key == $sunday){
        echo '<b>'.$days.'</b>' ."<br>" ."\n";
    } else {
        echo $days ."\n" . '<br>';
    }
}


/**
18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.
 */