<?php

$num = 10;

// 素数かどうかをチェックする
for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        $res = $i;
        break;
    }
}

// 出力
$prime_number = $num . 'は素数です。';
$not_prime_number = $num . 'は素数ではありません。';

if ($res) {
    echo $not_prime_number;
} else {
    echo $prime_number;
}
