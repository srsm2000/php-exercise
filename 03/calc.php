<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

if($operator == 'addition') {
  $symbol = '+';
  $answer = $num1 + $num2;
} elseif($operator == 'subtraction') {
  $symbol = '-';
  $answer = $num1 - $num2;
} elseif($operator == 'multiplication') {
  $symbol = '*';
  $answer = $num1 * $num2;
} elseif($operator == 'division') {
  $symbol = '/';
  $answer = $num1 / $num2;
} else {
  $res = 1;
}

if ($res) {
  echo "正しい演算子を指定して下さい";
} else {
  echo $num1 . $symbol . $num2 . "=" . $answer;
}
