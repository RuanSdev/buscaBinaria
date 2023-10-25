<?php

use function PHPSTORM_META\type;
$arry = [];
$lines = file("lista.txt");

foreach($lines as $line)
{
    $line =  intval($line);
    array_push($arry ,$line);
}
echo "Ordenado de forma crescente:".PHP_EOL;
asort($arry);

echo "<pre>";
print_r($arry);

echo "Ordenando de forma decrescente:".PHP_EOL;

rsort($arry);

echo "<pre>";
print_r($arry);
