<?php
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$i = 0;
foreach ($arr as $value) {
    $i++;
    echo $value;
    if($i%3 !== 0){
        echo ", ";
    }
    if($i%3 == 0){
        echo "\n";
    }
}





/**
16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach и оператора if
выведите на экран столбец элементов массива, как показано на картинке.
1, 2, 3
4, 5, 6
7, 8, 9
 */
