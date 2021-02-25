<?php

$eol = php_sapi_name() === 'cli' ? PHP_EOL : 'br';

for($i=0; $i < 5; $i++) {
    echo $i, $eol;
}


for($col=2; $col<=9; $col++) {
    for($row=1; $row<=10; $row++) {
        $resoult = $col * $row;
        echo "{$col} X {$row} = {$resoult}", $eol;
    }
    echo $eol;
}