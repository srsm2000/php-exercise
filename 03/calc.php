<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $symbol = '+';
        $answer = $num1 + $num2;
        break;
    case 'subtraction':
        $symbol = '-';
        $answer = $num1 - $num2;
        break;
    case 'multiplication':
        $symbol = '*';
        $answer = $num1 * $num2;
        break;
    case 'division':
        $symbol = '/';
        $answer = $num1 / $num2;
        break;
}

if ($symbol == NULL) {
    echo "正しい演算子を指定して下さい";
} else {
    echo $num1 . $symbol . $num2 . "=" . $answer;
}
