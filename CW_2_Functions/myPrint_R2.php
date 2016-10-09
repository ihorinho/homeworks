<?php
function myPrint_R($data, $inrecurse = false){
    if(is_scalar($data)){
        echo $data;
    }
    else {
        echo "Array ( ";
        while($item = each($data)){
           if(is_array($item[1])){
               echo "[" . $item[0] . "] => ";
               myPrint_R($item[1]);
           }
           else{
               echo "[" . $item[0] . "] => " . $item[1] . " ";
           }
        }
        echo " ) ";
    }
}

$a = 5;
$b = "wehsh";
$c = array(4,5,"vkfkf", "sv",[4343,[12,13],66,656], true);

myPrint_R($c);




