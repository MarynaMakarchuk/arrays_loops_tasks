<?php
$colors = array('red','yellow','blue','gray','maroon','brown','green');
$rows = 3;
$cols = 3;

$numbers = array();
for ($i = 1; $i <= 9; $i++){
   $numbers[] = rand(1, 9);
}
echo "\n";
shuffle($colors);
$ic = 0;
while ($ic < 9){
    foreach ($colors as $color){

        if ($ic < 9){
        $newcolors[] = $color;
        }

        $ic++;
    }
}

$ir = 0;
$result = array_map(null, $numbers, $newcolors);
echo "<table cellpadding='5' cellspacing='5'>";
foreach ($result as list ($a, $b)){
    if ($ir%3 == 0){echo "<tr>\n";}
    echo "<td style='background-color:".$b."'>". $a ."</td>\n";
    $ir++;
    if ($ir%3 == 0){echo "</tr>\n";}
}
echo "</table>";

/*
27. Создать генератор случайных таблиц.
Есть переменные: $row - кол-во строк в таблице, $cols - кол-во столбцов в таблице.
Есть список цветов, в массиве:
$colors = array('red','yellow','blue','gray','maroon','brown','green').
Необходимо создать скрипт, который по заданным условиям выведет таблицу
размера $rows на $cols, в которой все ячейки будут иметь цвета,
выбранные случайным образом из массива $colors.
В каждой ячейке должно находиться случайное число.
 */

