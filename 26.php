<?php
$arr = array();
for ($i = 1; $i < 101; $i++){
   $array[] = rand(1, 100);
}
foreach ($array as $key => $test){
    if ($key%2 == 0){
        $newarray [] = $test;
        echo $test ." ";
    }
}
    echo "\n";
    print_r($newarray);
    echo "\n";
    echo array_product($newarray);
    echo "\n";
    print_r($array);
    echo "\n";

foreach ($array as $key => $test){
    if ($key%2 !== 0 and $key > 0){
        $newarray [] = $test;
        echo $test ." ";
    }

}


/*26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand).
Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные
индексы. После вывести на экран элементы, которые больше ноля и у которых не парный
индекс.
*/