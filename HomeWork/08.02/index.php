<?php
error_reporting(E_ALL);

$firstNum = readline('First number: ');
$operator = readline('Operator [*/+-]: ');
$secondNum = readline('Second number: ');


if($operator == '*') {
    var_dump($firstNum * $secondNum);
}else if($operator == '/') {
    var_dump($firstNum / $secondNum);
}else if($operator == '+') {
    var_dump($firstNum + $secondNum);
}else if($operator == '-') {
    var_dump($firstNum - $secondNum);
}else {
    print('You entered an invalid operator. Try one of the following: * / + -');
}