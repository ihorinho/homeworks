<?php
//Variant 1
function do_symmetric2($number){
    $copy_numb = (string)$number;
    $rev_numb = '';

   while($copy_numb){
        $rev_numb .= $copy_numb % 10;
        $copy_numb = substr($copy_numb, 0, -1);
    }
    if($number == $rev_numb){
        echo $number . " is symmetric";
    }
    else{
        echo "Not symmetric " . $number;
        $number.= strrev(substr($number, 0, -1));
         echo  " -> " . $number;
    }
}

$numb = 13784;
$bbb = 7456547;

echo "<br>";
do_symmetric2($numb);
echo "<br>";
do_symmetric2($bbb);

//Variant 2
//function do_symmetric($number){
//    $copy_numb = $number;
//    settype($copy_numb, 'string');
//    $length = strlen($copy_numb);
//    $rev_numb ="";
//    for($i = $length-1; $i >= 0; $i--){
//        $rev_numb .= $copy_numb[$i];
//    }
//    if($rev_numb == $copy_numb){
//        echo $number . " is symmetric number";
//    }
//    else{
//        $copy_numb.= strrev(substr($copy_numb, 0, -1));
//        echo "Not symmetric " . $number . " -> " . $copy_numb;
//    }
//}