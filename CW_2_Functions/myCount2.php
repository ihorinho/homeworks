<?php
function myCount(array $data, $recurse = false, $inrecurse = false) {
    static $count = 0;
    if ($count == 0) {
        reset($data);
    }
    while ($item = each($data)){
        if(is_array($item[1]) && $recurse){
            myCount($item[1], true, true);
            continue;
        }
        else{
            $count++;
        }
    }
    //Якщо функція була викликана не рекурсивно, то обнуляємо лічильник при виході
    //Результат виведемо, скопіювавши його значення в іншу змінну
    if(!$inrecurse){
        $result = $count;
        $count = 0;
        return $result;
    }
    //Якщо функція викликана рекурсивно, то лічильник повертаємо не обнуляючи
    return $count;
}

$a = 5;
$b = "wehsh";
$c = array(4,5,"vkfkf", "sv",[4343,[12,13],66,656], true);

echo myCount($c);
echo "<br>";
echo myCount($c,true);



