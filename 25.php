<?php

$array = array();
for ($i = 1; $i < 10; $i++) {
    $array[]=rand(1,10);
}
print_r($array);
$a = max($array);
$b = min($array);
$max = array_keys($array, max($array))[0];
$min = array_keys($array, min($array))[0];

echo $a."-".$max. "\n". $b."-".$min;

$array[$max] = $b;
$array[$min] = $a;
echo "\n";
print_r($array);





/**
25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */
?>