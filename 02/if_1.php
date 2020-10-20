<?php

$a = 2;
$b = 2;

if($a < $b) {
    $max_number = $b;
} elseif($a > $b) {
    $max_number = $a;
} else {
	echo "入力された値は等しいです";
}
echo $max_number;
