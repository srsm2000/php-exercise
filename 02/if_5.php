<?php

$num = 10;

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
    $res = $i;
    echo $num . 'は素数ではありません。';
    break;
    }
}

if($res == NULL) {
    echo $num . "は素数です。";
}
