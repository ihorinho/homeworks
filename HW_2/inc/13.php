<?php
	$s = 333; //km
	$t = 2; //hours
	$v = number_format($s / $t, 2);

	echo "Speed = $v km/h or ".(number_format($v * 1000 / 3600, 2))." m/s";

