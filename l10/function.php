<?php

function sayHello($name, $age, $gender, $suffix = '!') {
    echo "Hello, dear {$name}, {$gender} , {$age} years old {$suffix}", '<br>';
}
sayHello('Dmytro', 3, 'male');

function intSum(...$ints): void
{
    echo array_sum($ints), '<br>';
}
intSum(1, 2, 3, 4, 5);

function intSums(int ...$ints):void
{
    echo array_sum($ints), '<br>';
}
intSums(1, 2, 3, 4, 5);

