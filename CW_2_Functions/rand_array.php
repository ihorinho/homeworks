<?php
//Функція, яка віддає рендомний масивкоторая отдает рендомный массив рендомных целых чисел (зависимость от диапазона)
function rand_array($min, $max) {
    $array = array();
    $count = rand(5, 20);
    for($i = 0; $i < $count; $i++){
         $array[] = rand($min, $max);
    }
    return $array;
}

echo "<pre>";
print_r(rand_array(5, 20));
print_r(rand_array(-50, 0));
print_r(rand_array(-20, 20));