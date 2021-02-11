<?php

$int = 1;
$float = 1.2;
$str = 'test';
$bool = true; // $bool = true/false;
$array = [1, 2, 'test'];
$object = new stdClass();
$null = null;

$file = fopen(__DIR__ . '/math.php', 'rb');
fclose($file);

$callable = static function () {

};

var_dump((string)1.002);
var_dump((int)'521');
var_dump((float)'521.7');
var_dump((int)'521 eggs');
var_dump((int)'eggs 521 ');
var_dump((int)true);
var_dump((int)false);
var_dump((bool)'test'); // Всё что не имеет данных будет выдовать false

var_dump(is_int(1.1));
var_dump(is_int(1));
var_dump(is_string('1'));
var_dump(is_bool(false));
var_dump(is_array([1]));
var_dump(is_object(new stdClass()));
var_dump(is_numeric('1'));
//подучить правила преобразования типов

var_dump(isset($t123));

$t456 = null;
var_dump(isset($t456));

var_dump(empty(null));
var_dump(empty(0));
var_dump(empty(false));
var_dump(empty(123));

echo null, PHP_EOL;







