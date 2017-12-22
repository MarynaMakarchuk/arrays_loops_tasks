<?php

for ($k1 = 1; $k1 < 11; $k1++){

    for($k2 = 1; $k2 < 11; $k2++){
        $result =$k1 * $k2;
        $row = "$k1 x $k2 = $result";
        echo $row . "\n";
    }
    echo "\n";
}

/**
Вывести таблицу умножения с помощью двух циклов for.
 */