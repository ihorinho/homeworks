<?php
	include "2.php";

	if($myAge>=18 && $myAge<=59){
		echo "Вам ще працювати і працювати";
	}
	elseif ($myAge > 59){
		echo "Вам пора на пенсію";
	}
	elseif($myAge>=0 && $myAge<18){
		echo "Вам ще рано працювати"; 
	}
