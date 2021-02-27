<?php

function game(int $number):bool
{
    return $number === random_int(1, 10);
}
while(true) {
    $number = readline('Enter youre number: ');
    echo game($number) ? 'Winner' : 'Louser';
    echo PHP_EOL;

    $continue = readline('Play again (yes/no): ');
    if($continue !== 'yes') {
        echo 'Bye', PHP_EOL;
        break;
    }
}
