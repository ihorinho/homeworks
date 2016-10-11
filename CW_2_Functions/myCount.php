<?php
echo "<pre>";
function myCount(array &$array){
    static $count = 0;
    if ($count == 0) {
        $array = array_values($array);
        reset($array);
    }
    if (!each($array)) {
        //Переписуємо лічильник в іншу змінну, а сам лічильник обнуляємо
        $result = $count;
        $count = 0;
        return $result;
    }
    $count++;
   return myCount($array);
}

$b = ["jdslg" =>"wehsh", 3, 546, "ssv"];
$c = array(4,[4343,[12,23,23],66,656],5,"vkfkf", "sv", true, false);

echo myCount($b);
echo "<br>";
echo myCount($c);



